<div id="modalcontainer">
    <div class="modal fade" id="createOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose an order type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('order.index') }}" class="btn btn-yellow-hub btn-lg" type="button"><i data-feather="plus"></i> Create a Regular Order</a>
                        <button class="btn btn-dark btn-lg" type="button" data-bs-dismiss="modal"><i data-feather="rotate-ccw"></i> <span>Create a Return Order</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
