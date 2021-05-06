<div class="row">
    <div class="col-12">
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-12">
                    <label for="form-label">Seleccione el archivo</label>
                    <input type="file" name="file" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                    <button class="btn btn-primary">Subir Archivo</button>
                </div>
            </div>
        </form>
    </div>
</div>