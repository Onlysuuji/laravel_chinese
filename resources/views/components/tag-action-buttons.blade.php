<div class="flex justify-center">
    <!-- ダウンロードフォーム -->
    <button type="button" name="download-button" value="{{ $tag }}" id="download-button-{{ $tag }}"
        class="{{ Auth::user()->check_tag($tag) || Auth::user()->check_skip_tag($tag) ? 'bg-gray-300 text-gray-600' : 'bg-green-300 text-lime-600' }} rounded py-1 px-3 mr-16">
        ダウンロード
    </button>

    <!-- オン・オフフォーム -->
    <button type="button" name="enable-button" value="{{ $tag }}" id="enable-button-{{ $tag }}"
        class="{{ !Auth::user()->check_tag($tag) && Auth::user()->check_skip_tag($tag) ? 'bg-green-300 text-lime-600' : 'bg-gray-300 text-gray-600' }} rounded py-1 px-3">
        オンにする
    </button>
    <button type="button" name="disable-button" value="{{ $tag }}" id="disable-button-{{ $tag }}"
        class="{{ Auth::user()->check_tag($tag) && !Auth::user()->check_skip_tag($tag) ? 'bg-green-300 text-lime-600' : 'bg-gray-300 text-gray-600' }} rounded py-1 px-3">
        オフにする
    </button>
</div>
