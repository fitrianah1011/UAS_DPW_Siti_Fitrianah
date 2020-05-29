<section class="content-header">
    <h1>Customers
    <small>Pelanggan</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fas fa-dashboard"></i></a></li>
    <li class="active">Customers</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

   <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data customers</h3>
            <div class="pull-right">
                <a href="<?=site_url('customer/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Alamat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td><?=$data->gender?></td>
                        <td><?=$data->phone?></td>
                        <td><?=$data->alamat?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('customer/edit/'.$data->customer_id)?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('customer/del/'.$data->customer_id)?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete 
                            </a>
                        </td>    
                    </tr>
                    <?php
                    }  ?>
                </tbody>
            </table>
        </div>
    </div>
</section>