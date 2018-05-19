




<li class="{{ Request::is('moteurs*') ? 'active' : '' }}">
    <a href="{!! route('moteurs.index') !!}"><i class="fa fa-edit"></i><span>Moteurs</span></a>
</li>

<li class="{{ Request::is('voitures*') ? 'active' : '' }}">
    <a href="{!! route('voitures.index') !!}"><i class="fa fa-edit"></i><span>Voitures</span></a>
</li>

