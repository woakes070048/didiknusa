<div class="col-sm-12 wow animated bounceInUp" >
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-widget">
                <a href="#tab-data" data-toggle="tab" id="tab-data-trigger">
                    <div class="box-header with-border">
                        <span class="username users-list-name text-blue">Data</span>
                        <span class="description users-list-name">Menampilkan seluruh data lokasi</span>
                    </div><!-- /.box-header -->
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box box-widget">
                <a href="#tab-new" data-toggle="tab" id="tab-new-trigger">
                    <div class="box-header with-border">
                        <span class="username users-list-name text-blue">Baru</span>
                        <span class="description users-list-name">Tambah lokasi</span>
                    </div><!-- /.box-header -->
                </a>
            </div>
        </div>
    </div>
    <div class="row wow animated bounceInUp">
        <div class="col-sm-12">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="tab-data">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Data</h3>
                        </div>
                        <div class="box-body">
                            <table id="dt-locate" class="table table-bordered table-striped"></table>
                        </div><!-- /.box-body -->
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-new">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Lokasi</h3>
                        </div>
                        <form role="form" id="form-locate">
                            <div class="box-body">
                                <div class="form-group hide">
                                    <label>Token</label>
                                    <input type="text" name="_token" value="{{csrf_token()}}" class="form-control" placeholder="Ketik nama">
                                </div>
                                <div class="form-group hide">
                                    <label>Location Id</label>
                                    <input type="text" name="location_id" class="form-control" placeholder="Enter ..."/>
                                </div>
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" name="detail" class="form-control" placeholder="Ketik nama lokasi baru"/>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
