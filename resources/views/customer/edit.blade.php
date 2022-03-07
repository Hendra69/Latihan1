<x-master>
    <div class="modal-body">
        <form action="/customer/update/{{$customer->id}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
         <h2>Edit Data</h2>
        </div>
          <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" value="{{ $customer->nama }}" class="form-control" placeholder="Nama">
          <span class="text-danger error-text title_error"  style="font-size: 13px"></span>
          </div>
         
          <div class="form-group">
          <label>Alamat</label>
          <textarea name="alt" value="" class="form-control" placeholder="Alamat">{{ $customer->alt }}</textarea>
          <span class="text-danger error-text post_content_error"  style="font-size: 13px"></span>
          </div>
          <button type="submit"  class="btn btn-success btn-block">Save </button>
          </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
</x-master>
  