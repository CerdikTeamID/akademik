<div class="leftmenu">
  <ul class="nav nav-tabs nav-stacked">    
    <li class="dropdown"><a href="#"><span class="icon-user"></span>User Accounts</a>
      <ul>
        <li><a href="<?=base_url('admin/adduser');?>">Tambah User</a></li>        
        <li><a href="<?=base_url('admin/userview');?>">Manajemen User</a></li>
        <li><a href="<?=base_url('admin/kategoripasien');?>">Kategori Pasien</a></li>
      </ul>
    </li>  
    <li class="dropdown"><a href="#"><span class="icon-user"></span>Akademik</a>
      <ul>
        <li><a href="<?=base_url('admin/adduser');?>">Data Mata Kuliah</a></li>        
        <li><a href="<?=base_url('admin/userview');?>">Data Dosen</a></li>
        <li><a href="<?=base_url('admin/kategoripasien');?>">Data Mahasiswa</a></li>
      </ul>
    </li> 

    <li class="dropdown"><a href="#"><span class="icon-user"></span>Dosen</a>
      <ul>
        <li><a href="<?=base_url('admin/adduser');?>">Data Mata Kuliah</a></li>        
        <li><a href="<?=base_url('admin/kategoripasien');?>">Data Mahasiswa</a></li>
      </ul>
    </li>     
    <li class="dropdown"><a href="#"><span class="icon-wrench"></span> System</a>
      <ul>
        <li><a href="<?=base_url('admin/config');?>">Konfigurasi</a></li>
        <li><a href="<?=base_url('admin/dbtool');?>">Database Tools</a></li>
        <li><a href="<?=base_url('home/passwordchange');?>">Ubah Password</a></li>
        <li><a href="<?=base_url('login/dologout');?>">Log Out</a></li>        
      </ul>
    </li>   
    </ul>
</div>
<!--leftmenu-->

</div>