@props(['name', 'image', 'modalId', 'role' => null])

<div class="col-md-6 col-lg-4 my-3">
    <div id="usedtoberow">
        <div id="usedtobecolsm">
            <img src="{{ $image }}" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="{{ $name }}">
        </div>
        <div id="usedtobecolsm">
            <h5 class="fw-bold mb-0 pb-0">{{ $name }}</h5>
            @if ($role)
                <h5 class="text-muted fw-bold">{{ $role }}</h5>
            @endif
            <div style="position: relative;">
                <p class="mb-0 mt-2 font-sm">
                    {{ str(preg_replace('/\s+/', ' ', strip_tags($slot)))->trim()->words(50, '...') }}
                </p>
                <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
            </div>
            <div type="button" data-toggle="modal" data-target="#{{ $modalId }}">
                <div class="d-flex justify-content-start" id="read-more-wrap">
                    <div style="color: #0292BC;" id="read-more-text">Read More</div>
                    <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $modalId }}Label">{{ $name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
