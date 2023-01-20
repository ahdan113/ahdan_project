<div class="modal fade" id="edittas-{{ $tas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('tas.update', $tas->id) }}" method="post">
            @csrf
            @method('put')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Tas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Merek</label>
                        <select name="id_merek" id="id_merek" class="form-select">
                        <option value="">Pilih Merek</option>
                        @foreach ($mereks as $merek)
                        <option value="{{ $merek->id }}" {{old ('id_merek') == $merek->id ? 'selected' : ''}}>{{ $merek->nama }}</option>
                   @endforeach
                   </select>
                    </div>

                    <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto"
                    class="form-control @error('foto') is-invalid @enderror" id="">
                    @error('foto')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="">Warna</label>
                    <input type="text" name="warna"
                    class="form-control @error('warna') is-invalid @enderror" id="">
                    @error('warna')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="">deskripsi</label>
                    <input type="text" name="deskripsi"
                    class="form-control @error('deskripsi') is-invalid @enderror" id="">
                    @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="">harga</label>
                    <input type="integer" name="harga"
                    class="form-control @error('harga') is-invalid @enderror" id="">
                    @error('harga')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="">link</label>
                    <input type="text" name="link"
                    class="form-control @error('link') is-invalid @enderror" id="">
                    @error('link')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div