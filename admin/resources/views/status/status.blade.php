@if($success != '')
    <div class="panel-body statusAlert"
         style="background-color: {{ $bgColor }};width: 200px;top:50px;color: white;z-index: 100;position: absolute;float: right">
        <span class="pull-right">{{$success}}</span>
    </div>

@endif