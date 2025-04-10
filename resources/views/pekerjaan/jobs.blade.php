@extends('layout.app')
@section('content')
    <div class="table-content">
        <div class="container-header-table d-flex justify-content-between mt-3 align-items-center">
            <h1 class="title-table">Data Pekerjaan</h1>
            <a href="{{ url('tambah-pekerjaan') }}" class="btn btn-primary">Tambah Pekerjaan</a>
        </div>
        <div class="isi-content">
            <div class="container-tables">
                <table class="table-pekerjaan table table-bordered text-center table-hover">
                    <thead>
                        <tr class="row-header-table">
                            <th class="th-header" scope="col">ID</th>
                            <th class="th-header" scope="col">Foto</th>
                            <th class="th-header" scope="col">Pekerjaan</th>
                            <th class="th-header" scope="col">Perusahaan</th>
                            <th class="th-header" scope="col">Deskripsi</th>
                            <th class="th-header" scope="col">Manfaat</th>
                            <th class="th-header" scope="col">Kategori</th>
                            <th class="th-header" scope="col">Tipe Pekerjaan</th>
                            <th class="th-header" scope="col">Jenis Pekerjan</th>
                            <th class="th-header" scope="col">Gaji</th>
                            <th class="th-header" scope="col">Perysaratan</th>
                            <th class="th-header" scope="col">Jumlah Pelamar</th>
                            <th class="th-header" scope="col">Lokasi</th>
                            <th class="th-header" scope="col">Create At</th>
                            <th class="th-header" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="body-tables">
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{ asset('assets/img/photos/Picture1.jpg') }}" alt=""></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>
                                <div class="action-table d-flex justify-content-center align-items-center gap-3">
                                    <a href="" class="btn btn-secondary">View</a>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{ asset('assets/img/photos/Picture1.jpg') }}" alt=""></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>
                                <div class="action-table d-flex justify-content-center align-items-center gap-3">
                                    <a href="" class="btn btn-secondary">View</a>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{ asset('assets/img/photos/Picture1.jpg') }}" alt=""></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>
                                <div class="action-table d-flex justify-content-center align-items-center gap-3">
                                    <a href="" class="btn btn-secondary">View</a>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{ asset('assets/img/photos/Picture1.jpg') }}" alt=""></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab quas nesciunt dignissimos
                                sed
                                vel repudiandae amet sequi quos obcaecati temporibus commodi, nobis accusantium itaque
                                voluptas
                                natus exercitationem, perspiciatis libero.</td>
                            <td>
                                <div class="action-table d-flex justify-content-center align-items-center gap-3">
                                    <a href="" class="btn btn-secondary">View</a>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
