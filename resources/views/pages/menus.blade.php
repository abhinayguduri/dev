<ul>
        <a href="{{config('app.url')}}public/"><li>
            <style>
                ul li ul li:hover #pagemen{
	display: block;
}
#pagemen{
	display: none;
}
#pagemen h3{
	position: relative;
	left: 20px;
}
                </style>
                    <h3 style="color: red;">Author</h3>
                </li></a>
                <a><li>
                    <h3>Controls<i class="fa fa-plus" id="menu-icon"></i></h3>
                    <ul>
                        <a href="{{config('app.url')}}addmenu"><li id="i-li"><h3>Add Menu</h3>
                            
                        </li></a>
                        <a href="{{config('app.url')}}addsubmenu"><li id="i-li"><h3>Add Sub-Menu</h3></li></a>
                        <a href="{{config('app.url')}}addpage"><li id="i-li"><h3>Add Page</h3></li></a>
                        
                    </ul>
                </li></a>
                @if(count($menus) > 0)
                    @foreach ($menus as $menu)
                        <a><li>
                        <h3>{{$menu->name}}<i class="fa fa-plus" id="menu-icon"></i></h3>
                            <ul>
                            @if (count($submenus) > 0)
                                @foreach ($submenus as $submenu)
                                    @if ($submenu->pid == $menu->id)
                            <a ><li id="i-li"><h3>{{$submenu->name}}</h3>
                                <ul>
                                    @foreach ($pages as $page)
                                        @if ($page->pid == $submenu->id)
                                            <a href="{{config('app.url')}}submenus/{{$page->id}}"><li id="pagemen"><h3>{{$page->name}}</h3></li></a>
                                        @endif
                                        
                                    @endforeach
                                </ul>
                            </li></a>
                                    @endif
                                @endforeach
                            @endif
                            </ul>
                        </li></a>
                    @endforeach
                @endif
</ul>