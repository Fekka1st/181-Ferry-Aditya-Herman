@extends('layouting.master')
@section('title',"Manajemen Produk")

@section('content')
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Kategori Obat
                </h5>
            </div>
            <div class="card-body">
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><select class="dataTable-selector form-select"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select><label> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table table-striped dataTable-table" id="table1">
                    <thead>
                        <tr><th data-sortable="" style="width: 11.2329%;"><a href="#" class="dataTable-sorter">Name</a></th><th data-sortable="" style="width: 44.5662%;"><a href="#" class="dataTable-sorter">Email</a></th><th data-sortable="" style="width: 17.9909%;"><a href="#" class="dataTable-sorter">Phone</a></th><th data-sortable="" style="width: 15.6164%;"><a href="#" class="dataTable-sorter">City</a></th><th data-sortable="" style="width: 10.5936%;"><a href="#" class="dataTable-sorter">Status</a></th></tr>
                    </thead>
                    <tbody><tr><td>Graiden</td><td>vehicula.aliquet@semconsequat.co.uk</td><td>076 4820 8838</td><td>Offenburg</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Dale</td><td>fringilla.euismod.enim@quam.ca</td><td>0500 527693</td><td>New Quay</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Nathaniel</td><td>mi.Duis@diam.edu</td><td>(012165) 76278</td><td>Grumo Appula</td><td>
                                <span class="badge bg-danger">Inactive</span>
                            </td></tr><tr><td>Darius</td><td>velit@nec.com</td><td>0309 690 7871</td><td>Ways</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Oleg</td><td>rhoncus.id@Aliquamauctorvelit.net</td><td>0500 441046</td><td>Rossignol</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Kermit</td><td>diam.Sed.diam@anteVivamusnon.org</td><td>(01653) 27844</td><td>Patna</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Jermaine</td><td>sodales@nuncsit.org</td><td>0800 528324</td><td>Mold</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Ferdinand</td><td>gravida.molestie@tinciduntadipiscing.org</td><td>(016977) 4107</td><td>Marlborough</td><td>
                                <span class="badge bg-danger">Inactive</span>
                            </td></tr><tr><td>Kuame</td><td>Quisque.purus@mauris.org</td><td>(0151) 561 8896</td><td>Tresigallo</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Deacon</td><td>Duis.a.mi@sociisnatoquepenatibus.com</td><td>07740 599321</td><td>Karapınar</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Channing</td><td>tempor.bibendum.Donec@ornarelectusante.ca</td><td>0845 46 49</td><td>Warrnambool</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Aladdin</td><td>sem.ut@pellentesqueafacilisis.ca</td><td>0800 1111</td><td>Bothey</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Cruz</td><td>non@quisturpisvitae.ca</td><td>07624 944915</td><td>Shikarpur</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Keegan</td><td>molestie.dapibus@condimentumDonecat.edu</td><td>0800 200103</td><td>Assen</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Ray</td><td>placerat.eget@sagittislobortis.edu</td><td>(0112) 896 6829</td><td>Hofors</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Maxwell</td><td>diam@dapibus.org</td><td>0334 836 4028</td><td>Thane</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Carter</td><td>urna.justo.faucibus@orci.com</td><td>07079 826350</td><td>Biez</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Stone</td><td>velit.Aliquam.nisl@sitametrisus.com</td><td>0800 1111</td><td>Olivar</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Berk</td><td>fringilla.porttitor.vulputate@taciti.edu</td><td>(0101) 043 2822</td><td>Sanquhar</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Philip</td><td>turpis@euenimEtiam.org</td><td>0500 571108</td><td>Okara</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Kibo</td><td>feugiat@urnajustofaucibus.co.uk</td><td>07624 682306</td><td>La Cisterna</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Bruno</td><td>elit.Etiam.laoreet@luctuslobortisClass.edu</td><td>07624 869434</td><td>Rocca d"Arce</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Leonard</td><td>blandit.enim.consequat@mollislectuspede.net</td><td>0800 1111</td><td>Lobbes</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Hamilton</td><td>mauris@diam.org</td><td>0800 256 8788</td><td>Sanzeno</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr><tr><td>Harding</td><td>Lorem.ipsum.dolor@etnetuset.com</td><td>0800 1111</td><td>Obaix</td><td>
                                <span class="badge bg-success">Active</span>
                            </td></tr></tbody>
                </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 25 of 26 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list pagination pagination-primary"><li class="active page-item"><a href="#" data-page="1" class="page-link">1</a></li><li class="page-item"><a href="#" data-page="2" class="page-link">2</a></li><li class="pager page-item"><a href="#" data-page="2" class="page-link">›</a></li></ul></nav></div></div>
            </div>
        </div>

    </section>
</div>
@endsection

@push('scripts')
<script src="{{asset('master/assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
<script src="{{asset('master/assets/static/js/pages/simple-datatables.js')}}"></script>
@endpush

@push('style')
<link rel="stylesheet" href="{{asset('master/assets/extensions/simple-datatables/style.css')}}">
<link rel="stylesheet" href="{{asset('master/assets/compiled/css/table-datatable.css')}}">
@endpush
