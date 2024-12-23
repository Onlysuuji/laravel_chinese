<x-base>
    <x-slot name="title">
        単語パック
    </x-slot>
    <div class="w-full flex justify-center">
        <div class="flex w-2/3 text-center border-2 border-gray-300 rounded">
            <div class="flex w-full">
                <div class="border-2 border-gray-300 w-1/4">
                    TOEIC
                </div>
                <div class="border-2 border-gray-300 w-1/4">
                    <div>
                        700
                    </div>
                    <div>
                        900
                    </div>
                </div>
                <div class="border-2 border-gray-300 w-2/4">

                    <x-tag-action-buttons tag="toeic700" />
                    <x-tag-action-buttons tag="toeic900" />
                    
                </div>
            </div>

            <script>
                // クラス名に "example" を含む要素をすべて取得

                $(document).ready(function() {
                    // インストールボタンのクリックイベント
                    $('button[name="download-button"]').on('click', function() {
                        const tag = $(this).val();
                        const formData = new FormData();
                        formData.append('tag', tag); // 手動で値を追加

                        fetch('{{ route('english.package.install') }}', {
                                method: 'POST', // POST リクエスト
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                        .getAttribute('content')
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert(data.message); // メッセージ表示
                                if (data.redirect_url) {
                                    window.location.href = data.redirect_url; // リダイレクト
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    });

                    // 有効化ボタンのクリックイベント
                    $('button[name="enable-button"]').on('click', function() {
                        const tag = $(this).val();
                        const formData = new FormData();
                        formData.append('tag', tag); // ボタンの value を追加

                        fetch('{{ route('english.package.enable') }}', {
                                method: 'POST', // POST リクエスト
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                        .getAttribute('content')
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert(data.message); // メッセージ表示
                                if (data.redirect_url) {
                                    window.location.href = data.redirect_url; // リダイレクト
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    });

                    // 無効化ボタンのクリックイベント
                    $('button[name="disable-button"]').on('click', function() {
                        const tag = $(this).val();
                        const formData = new FormData();
                        formData.append('tag', tag); // ボタンの value を追加

                        fetch('{{ route('english.package.disable') }}', {
                                method: 'POST', // POST リクエスト
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                        .getAttribute('content')
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert(data.message); // メッセージ表示
                                if (data.redirect_url) {
                                    window.location.href = data.redirect_url; // リダイレクト
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    });
                });
            </script>

        </div>

    </div>

</x-base>
