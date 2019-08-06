@extends('progressive.layout')
@section('title')
    Data Diri Guru
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            <header class="page-header">
                <h1 class="title">Data Guru SMAN 3 Boyolali</h1>
            </header>

            @foreach ($employees as $employee)
                <!-- .employee-->
                {{-- <div class="col-sm-3 col-md-3 employee rotation"> --}}
                <div class="col-sm-3 col-md-3 employee">

                    <div class="default">
                        <div class="image">
                            <img class="replace-2x" src="/images/{{$employee->photo}} " alt="{{$employee->photo}}" style="width:270px;height:270px;">
                        </div>
                        <div class="description">
                            <div class="vertical">
                                <h3 class="name">{{$employee->name}}</h3>
                                <div class="role"><b>NIP: </b>{{$employee->nip}} </div>	
                                <div class="role">{{$employee->employee_category->name}} </div>	
                            </div>
                        </div>
                    </div>

                    {{-- <div class="employee-hover">
                        <h3 class="name">{{$employee->name}}</h3>
                        <div class="role">{{$employee->employee_category->name}} </div>
                        <div>
                            <p>Kata singkat guru klo nggk da ya udah</p>
                            <div class="contact"><b>NIP: </b>{{$employee->nip}} </div>
                            <div class="contact"><b>Phone: </b>11 555 333 77</div>
                        </div>
                    </div> --}}
                    
                </div>    
            @endforeach

        </div>
    </div>
@endsection