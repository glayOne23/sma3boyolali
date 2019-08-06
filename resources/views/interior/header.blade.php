<header id="header" id="home">    
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="/"><img src="/interior/img/logosmagaboy2.png" alt="" title="" style="max-width:2em;"/></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              {{-- <li class="menu-active"><a href="index.html">Home</a></li> --}}
              <li><a href="/">Home</a></li>
              <li class="menu-has-children"><a href="">Profil</a>
                <ul>
                    <li><a href="/sejarah">Sejarah</a></li>
                    <li><a href="/visi-misi">Visi Misi</a></li>
                    <li><a href="/guru">Profil Guru</a></li>
                    {{-- <li><a href="/sarpras">Sarana Prasarana</a></li> --}}
                </ul>
              </li>	
              <li><a class="parent" href="/prestasi">Prestasi</a></li>
              <li class="menu-has-children"><a href="">Unit Kegiatan</a>
                <ul>
                    <li class="menu-has-children"><a href="">Organisasi</a>
                        <ul>
                            @foreach ($extracurriculars->where('type','organisasi') as $organisasi)										
                                <li><a href="/ekstrakurikuler/{{$organisasi->id}}">{{$organisasi->name}}</a></li>            
                            @endforeach    
                        </ul>
                    </li>					                		
                    <li class="menu-has-children"><a href="">Ekstrakurikuler</a>
                        <ul>
                            @foreach ($extracurriculars->where('type','ekstrakurikuler') as $ekstrakurikuler)										
                                <li><a href="/ekstrakurikuler/{{$ekstrakurikuler->id}}">{{$ekstrakurikuler->name}}</a></li>            
                            @endforeach                                  
                        </ul>
                    </li>					                		
                    <li class="menu-has-children"><a href="">Organisasi</a>
                        <ul>
                            @foreach ($extracurriculars->where('type','osn') as $osn)										
                                <li><a href="/ekstrakurikuler/{{$osn->id}}">{{$osn->name}}</a></li>            
                            @endforeach    
                        </ul>
                    </li>					                		
                </ul>
              </li>

              <li><a href="/galeri">Galeri</a></li>
    
              <li><a href="/berita">Berita</a></li>

              {{-- <li><a href="/link">Link Terkait</a></li> --}}

              {{-- <li><a href="/alumni">Alumni</a></li> --}}

              <li class="item-danger item-bg text-danger"><a href="https://jateng.siap-ppdb.com/" target="_blank">PPDB</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
</header><!-- #header -->