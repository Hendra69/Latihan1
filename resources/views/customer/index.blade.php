<x-master>

   
  <div class="card-body">
                  <table class="table table-bordered">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Create
                        </button>
                    <thead>
                      <tr>
                      <tr>
                          <th scope="col">Nama</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">type</th>
                          <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($dat as $data)
                          <tr>
                              <td>{{ $data->nama }}</td>
                              <td>{{ $data->alt }}</td>
                              <td>{{ $data->type }}</td>
                             <td>
                               <a href ="/customer/edit/{{$data->id}}" class="btn btn-outline-warning">Edit</a>
                             <a href ="/customer/destroy/{{$data->id}}"class="btn btn-outline-primary">Delete</a></td>
                          </tr>
                       
                          @endforeach
                    </tbody>
                  </table>
                  {{$dat->links()}}
                </div>
    
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form action="/customer/create " method="POST">
                              
                            {{csrf_field()}}
                              <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control" placeholder="Nama">
                              <span class="text-danger error-text title_error"  style="font-size: 13px" >@error('nama'){{$message}}@enderror</span>
                              </div>
                            
                              <div class="form-group">
                              <label>Alamat</label>
                              <textarea name="alt" value="{{ old('alt') }}" class="form-control" placeholder="Alamat"></textarea>
                              <span class="text-danger error-text post_content_error"  style="font-size: 13px">@error('alt'){{$message}}@enderror</span>
                              </div>
                              
                              <button type="submit"  class="btn btn-success btn-block">Save Change</button>
                              </form>
                            </div>
                            <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <script type="text/javascript">
                          $('.date').datepicker({  
                            format: 'mm-dd-yyyy'
                          });  
                      </script> -->


</x-master>