<ul class="nav">

    <li class="nav-item">
        <a href="{{ route('back.dashboard') }}">
            <i class="fas fa-home"></i>
            <p>{{ __('Dashboard') }}</p>
        </a>
    </li>

    @php
        if(Auth::guard('admin')->user()->role->section != 'null'){
            $section = json_decode(Auth::guard('admin')->user()->role->section,true);
        }else{
            $section = [];
        }
    @endphp

 


    @if (in_array('Manage Orders',$section))
    <li class="nav-item {{ request()->is('orders/*') ? 'submenu' : '' }}">
        <a data-toggle="collapse" href="#order">
            <i class="fab fa-first-order"></i>
            <p>{{ __('Manage Orders') }} </p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="order">
            <ul class="nav nav-collapse">
                <li class="{{!request()->input('type') && request()->is('admin/orders')  ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index') }}">
                        <span class="sub-item">{{ __('All Orders') }}</span>
                    </a>
                </li>
                <li class="{{request()->input('type') == 'Pending' ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index').'?type='.'Pending' }}">
                        <span class="sub-item">{{ __('Pending Orders') }}</span>
                    </a>
                </li>
                <li class="{{request()->input('type') == 'In Progress' ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index').'?type='.'In Progress' }}">
                        <span class="sub-item">{{ __('Progress Orders') }}</span>
                    </a>
                </li>

                <li class="{{request()->input('type') == 'Delivered' ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index').'?type='.'Delivered' }}">
                        <span class="sub-item">{{ __('Delivered Orders') }}</span>
                    </a>
                </li>
                <li class="{{request()->input('type') == 'Canceled' ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index').'?type='.'Canceled' }}">
                        <span class="sub-item">{{ __('Canceled Orders') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endif

     




  

   
</ul>
