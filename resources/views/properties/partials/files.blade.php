{{-- images --}}
<div class="d-flex flex-wrap flex-stack my-5">
    <h3 class="fw-bold my-2">Property Images
        <span class="fs-6 text-gray-400 fw-semibold ms-1">{{ count($property->images) }}</span>
    </h3>
</div>

<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
    @foreach ($property->images as $image)
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center text-center flex-column p-3">
                    <img src="{{ $image->file }}" alt="image">
                </div>
            </div>
        </div>
    @endforeach
</div>

{{-- videos --}}
@if (count($property->videos) > 0)
    <div class="d-flex flex-wrap flex-stack my-5">
        <h3 class="fw-bold my-2">Property Videos
            <span class="fs-6 text-gray-400 fw-semibold ms-1">{{ count($property->videos) }}</span>
        </h3>
    </div>
    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
        @foreach ($property->videos as $video)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center text-center flex-column p-3">
                        <video src="{{ $video->file }}" controls alt="video">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

<div class="d-flex flex-wrap flex-stack my-5">
    <h3 class="fw-bold my-2">Documents
        <span class="fs-6 text-gray-400 fw-semibold ms-1">{{ count($property->documents) }}</span>
    </h3>
</div>
<div class="card h-100">
    <div class="card-body">
        @foreach ($property->documents as $document)
            <a href="{{ asset($document->filename) }}"
                class="d-flex justify-content-between align-items-center border p-4 rounded mb-3" download>
                <div class="d-flex gap-3">
                    <span>
                        <i class="fas fa-file fs-18"></i>
                    </span>
                    <h5 class="mb-0 pb-0">{{ $document->name }}</h5>
                </div>
                <span>
                    <i class="fas fa-download fs-18 text-success"></i>
                </span>
            </a>
        @endforeach
    </div>

</div>
