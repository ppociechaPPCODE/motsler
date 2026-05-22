@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tinymce@7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const uploadUrl = @json(route('admin.editor.upload'));
            const autosavePrefix = @json('tinymce-post-' . (isset($post) && $post->exists ? $post->id : 'new'));

            tinymce.init({
                base_url: 'https://cdn.jsdelivr.net/npm/tinymce@7',
                suffix: '.min',
                selector: '#post_body',
                language: 'pl',
                language_url: 'https://cdn.jsdelivr.net/npm/tinymce@7/langs/pl.min.js',

                height: 920,
                min_height: 420,
                max_height: 3200,
                resize: true,

                plugins: [
                    'accordion', 'advlist', 'anchor', 'autolink', 'autoresize', 'autosave',
                    'charmap', 'code', 'codesample', 'directionality', 'emoticons', 'fullscreen',
                    'help', 'image', 'importcss', 'insertdatetime', 'link', 'lists', 'media',
                    'nonbreaking', 'pagebreak', 'preview', 'quickbars', 'searchreplace', 'table',
                    'visualblocks', 'visualchars', 'wordcount',
                ].join(' '),

                toolbar_mode: 'wrap',
                toolbar: [
                    'undo redo | restoredraft | cut copy paste pastetext | searchreplace',
                    'styles | blocks fontfamily fontsize | bold italic underline strikethrough subscript superscript | forecolor backcolor | removeformat',
                    'alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | ltr rtl',
                    'link anchor image media table | emoticons charmap hr pagebreak nonbreaking | accordion codesample insertdatetime',
                    'visualblocks visualchars blockquote | code preview fullscreen | help wordcount',
                ],

                menubar: 'file edit view insert format tools table help',
                contextmenu: 'link image table',

                quickbars_selection_toolbar: 'bold italic underline | blocks | quicklink h2 h3 blockquote',
                quickbars_insert_toolbar: 'quickimage quicktable accordion',

                block_formats: 'Akapit=p; Nagłówek 1=h1; Nagłówek 2=h2; Nagłówek 3=h3; Nagłówek 4=h4; Nagłówek 5=h5; Nagłówek 6=h6; Cytat=blockquote; Kod=pre',
                style_formats: [
                    { title: 'Nagłówki', items: [
                        { title: 'Nagłówek 1', format: 'h1' },
                        { title: 'Nagłówek 2', format: 'h2' },
                        { title: 'Nagłówek 3', format: 'h3' },
                        { title: 'Nagłówek 4', format: 'h4' },
                    ]},
                    { title: 'Tekst', items: [
                        { title: 'Pogrubienie', format: 'bold' },
                        { title: 'Kursywa', format: 'italic' },
                        { title: 'Podkreślenie', format: 'underline' },
                        { title: 'Przekreślenie', format: 'strikethrough' },
                        { title: 'Indeks górny', format: 'superscript' },
                        { title: 'Indeks dolny', format: 'subscript' },
                    ]},
                    { title: 'Bloki', items: [
                        { title: 'Akapit', format: 'p' },
                        { title: 'Cytat', format: 'blockquote' },
                        { title: 'Div', format: 'div' },
                        { title: 'Pre', format: 'pre' },
                    ]},
                ],
                font_family_formats: 'Arial=arial,helvetica,sans-serif; Georgia=georgia,palatino,serif; Times New Roman=times new roman,times,serif; Trebuchet MS=trebuchet ms,geneva,sans-serif; Verdana=verdana,geneva,sans-serif; Courier New=courier new,courier,monospace',
                font_size_formats: '8pt 10pt 12pt 14pt 16pt 18pt 24pt 36pt 48pt',

                codesample_languages: [
                    { text: 'HTML/XML', value: 'markup' },
                    { text: 'JavaScript', value: 'javascript' },
                    { text: 'CSS', value: 'css' },
                    { text: 'PHP', value: 'php' },
                    { text: 'SQL', value: 'sql' },
                    { text: 'Python', value: 'python' },
                    { text: 'Bash', value: 'bash' },
                    { text: 'JSON', value: 'json' },
                ],

                image_advtab: true,
                image_caption: true,
                image_title: true,

                table_advtab: true,
                table_responsive: true,
                table_sizing_mode: 'responsive',
                table_toolbar: 'tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',

                link_default_target: '_blank',
                link_assume_external_targets: 'https',
                rel_list: [
                    { title: 'Brak', value: '' },
                    { title: 'nofollow', value: 'nofollow' },
                    { title: 'noopener', value: 'noopener' },
                    { title: 'noreferrer', value: 'noreferrer' },
                ],
                target_list: [
                    { title: 'Brak', value: '' },
                    { title: 'Nowa karta', value: '_blank' },
                ],

                autosave_interval: '30s',
                autosave_prefix: autosavePrefix,
                autosave_restore_when_empty: false,

                branding: false,
                promotion: false,
                relative_urls: false,
                document_base_url: @json(url('/')),
                automatic_uploads: true,
                paste_data_images: true,
                images_upload_handler: function (blobInfo) {
                    return new Promise(function (resolve, reject) {
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', uploadUrl);
                        xhr.setRequestHeader('X-CSRF-TOKEN', csrf);
                        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        xhr.onload = function () {
                            if (xhr.status < 200 || xhr.status >= 300) {
                                reject({ message: 'HTTP ' + xhr.status, remove: true });
                                return;
                            }
                            var json = JSON.parse(xhr.responseText);
                            if (!json || typeof json.location !== 'string') {
                                reject('Invalid JSON');
                                return;
                            }
                            resolve(json.location);
                        };
                        xhr.onerror = function () {
                            reject({ message: 'Upload failed', remove: true });
                        };
                        var formData = new FormData();
                        formData.append('file', blobInfo.blob(), blobInfo.filename());
                        xhr.send(formData);
                    });
                },
            });

            var postForm = document.querySelector('form.admin-post-form');
            if (postForm) {
                postForm.addEventListener('submit', function () {
                    if (window.tinymce) {
                        window.tinymce.triggerSave();
                    }
                });
            }
        });
    </script>
@endpush
