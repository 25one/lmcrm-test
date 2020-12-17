@extends('layouts.app')

@section('css')
<style>
.content {
width: 30%;  
}
</style>  
@endsection

@section('content')

@php
//print_r($cards->toArray());
@endphp

        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                    
                          <!--  <index-component></index-component> -->
                          
                          <router-view name="indexComponent"></router-view>
                          <router-view></router-view>               
                          
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>
@endsection
<script>
var leads = @json($leads);
</script>
@section('js')

@endsection
