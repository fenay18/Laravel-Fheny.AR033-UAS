<ul>
	<li><b>MENU</b></li>
	<li><a href="#">TI</a></li>
	<li><a href="#">TIF</a></li>
	<li><a href="#">DKV</a></li>
	<li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
</ul>