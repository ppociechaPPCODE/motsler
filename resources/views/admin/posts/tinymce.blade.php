@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tinymce@7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const uploadUrl = @json(route('admin.editor.upload'));
            tinymce.init({
                base_url: 'https://cdn.jsdelivr.net/npm/tinymce@7',
                suffix: '.min',
                selector: '#post_body',
                height: 920,
                min_height: 420,
                max_height: 3200,
                resize: true,
                plugins: 'link image lists table code fullscreen',
                toolbar: 'undo redo | blocks | bold italic underline strikethrough | alignleft aligncenter alignright | bullist numlist | link image table | removeformat | code fullscreen',
                menubar: false,
                branding: false,
                promotion: false,
                relative_urls: false,
                document_base_url: @json(url('/')),
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
