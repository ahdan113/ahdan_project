<div class="modal fade" id="addmerek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('merek.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Tambah Merek</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Merek</label>
                        <input type="text" name="nama" class="form-control" id="" required>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>