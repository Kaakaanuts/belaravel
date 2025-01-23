@extends('template')
@section('title', 'Project')
@section('content-title', 'Project')
@section('isi1')
        <div class="col-md-10 bg-white">
            <div class="container-fluid">
                <div class="row p-3">
                    <h2 class="">Project</h2>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h6>Data Project</h6>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Makanan</th>
                                            <th>Harga</th>
                                            <th style="width: 30%;">Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ricebowl Mentai</td>
                                            <td>Rp. 12.000</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem laudantium quia natus, aspernatur perspiciatis consequuntur impedit harum, fugiat necessitatibus veritatis porro. Sequi libero iste perspiciatis atque, et distinctio nemo omnis.</td>
                                            <td>
                                                <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"> <i class="bi bi-eye"></i></button>
                                                <a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                                <a class="btn btn-sm btn-danger" href=""><i class="bi bi-trash-fill"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Risol Mentai</td>
                                            <td>Rp. 5.000</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem laudantium quia natus, aspernatur perspiciatis consequuntur impedit harum, fugiat necessitatibus veritatis porro. Sequi libero iste perspiciatis atque, et distinctio nemo omnis.</td>
                                            <td>
                                                <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                                <a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                                <a class="btn btn-sm btn-danger" href=""><i class="bi bi-trash-fill"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="modal fade" id="detailproject">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            ...
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <h6>Tambah Produk</h6>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <label class="form-label" for="">Tipe Makanan</label>
                                    <select class="form-select" name="" id="">
                                        <option value="">Nasi</option>
                                        <option value="">Kue Kering</option>
                                        <option value="">Kue Basah</option>
                                    </select>
                                    <label class="form-label" for="">Nama Makanan</label>
                                    <input class="form-control" type="text" >
                                    <label class="form-label" for="">Harga Makanan</label>
                                    <input class="form-control" type="text" >
                                    <label class="form-label" for="">Foto Makanan</label>
                                    <input class="form-control" type="file">
                                    <label class="form-label" for="">Decription</label>
                                    <textarea class="form-control" name="" id=""></textarea>
                                    <label class="form-label" for="">Status Makanan</label>
                                    <div class="form-check">
                                        <input name="status" class="form-check-input" type="radio" checked>
                                        <label class="form-check-label" for="">Frozen</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="status" class="form-check-input" type="radio">
                                        <label class="form-check-label" for="">Siap Makan</label>
                                    </div>
                            </div>
                            <div class="card-footer">
                                    <input class="btn btn-success" type="submit" value="Simpan">
                                    <input class="btn btn-danger" type="button" value="Cancel">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
