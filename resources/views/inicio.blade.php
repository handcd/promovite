@extends('layouts.main')
<style type="text/css">
  ::-webkit-scrollbar {
    display: none;
}

.menu {
	position: absolute;
}
.fijar {
	position: fixed !important;
	top: 0 !important;
	z-index: 100;
}
.fondo {	
	padding-left: 0px !important;
    width: 0px !important;

}

</style>
@section('content')
  <div class="menu fijar" style="width: 100%;">
    <object type="text/html" data="http://www.handcreativedesign.com.mx/promovite" target="_top" style="width: 100%; height:100% "></object>
  </div>    
@endsection 