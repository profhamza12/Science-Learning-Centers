<aside class="dark">
    <div class="site-name">
        <a href="" class="d-block">
            <img src="{{asset('admin/images/logo.jpg')}}" alt="logo" class="rounded-circle" width="40" height="40">
            <span>{{__('admin.site_name')}}</span>
        </a>
    </div>
    <div class="user-info">
        <a href="" class="d-block">
            <img src="{{asset('admin/images/logo.jpg')}}" alt="logo" class="rounded-circle" width="40" height="40">
            <span>Hamza Salah</span>
        </a>
    </div>
    <ul class="items list-unstyled">
        <li>
            <a href="" class="d-block bg-primary active">
                <div class="item-name">
                    <i class="fa-solid fa-house"></i>
                    <span>{{__('admin.dashboard')}}</span>
                </div>
                <div class="item-icon">
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                        <i class="fa-solid fa-angles-left"></i>
                    @endif
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "ar")
                        <i class="fa-solid fa-angles-right"></i>
                    @endif
                </div>
            </a>
        </li>
        <li>
            <a href="" class="d-block toggle-ul">
                <div class="item-name">
                    <i class="fa-solid fa-house"></i>
                    <span>{{__('admin.users')}}</span>
                </div>
                <div class="item-icon">
                    <span class="items-count bg-primary">6</span>
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                        <i class="fa-solid fa-angles-left"></i>
                    @endif
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "ar")
                        <i class="fa-solid fa-angles-right"></i>
                    @endif
                </div>
            </a>
            <ul class="list-unstyled data">
                <li>
                    <a href="" class="d-block">
                        <i class="fa-solid fa-house"></i>
                        <span>{{__('admin.show_users')}}</span>
                    </a>
                </li>
                <li>
                    <a href="" class="d-block">
                        <i class="fa-solid fa-house"></i>
                        <span>{{__('admin.add_user')}}</span>
                    </a>
                </li>
                <li>
                    <a href="" class="d-block toggle-ul">
                        <div class="item-name">
                            <i class="fa-solid fa-house"></i>
                            <span>{{__('admin.user_groups')}}</span>
                        </div>
                        <div class="item-icon">
                            <span class="items-count bg-primary">6</span>
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                <i class="fa-solid fa-angles-left"></i>
                            @endif
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "ar")
                                <i class="fa-solid fa-angles-right"></i>
                            @endif
                        </div>
                    </a>
                    <ul class="list-unstyled data">
                        <li>
                            <a href="" class="d-block">
                                <i class="fa-solid fa-house"></i>
                                <span>{{__('admin.show_groups')}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="d-block">
                                <i class="fa-solid fa-house"></i>
                                <span>{{__('admin.add_group')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="" class="d-block toggle-ul">
                    <div class="item-name">
                            <i class="fa-solid fa-house"></i>
                            <span>{{__('admin.permissions')}}</span>
                        </div>
                        <div class="item-icon">
                            <span class="items-count bg-primary">6</span>
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                <i class="fa-solid fa-angles-left"></i>
                            @endif
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "ar")
                                <i class="fa-solid fa-angles-right"></i>
                            @endif
                        </div>
                    </a>
                    <ul class="list-unstyled data">
                        <li>
                            <a href="" class="d-block">
                                <i class="fa-solid fa-house"></i>
                                <span>{{__('admin.show_permissions')}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="d-block">
                                <i class="fa-solid fa-house"></i>
                                <span>{{__('admin.add_permission')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="" class="d-block toggle-ul">
                <div class="item-name">
                    <i class="fa-solid fa-house"></i>
                    <span>{{__('admin.students')}}</span>
                </div>
                <div class="item-icon">
                    <span class="items-count bg-primary">6</span>
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                        <i class="fa-solid fa-angles-left"></i>
                    @endif
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "ar")
                        <i class="fa-solid fa-angles-right"></i>
                    @endif
                </div>
            </a>
            <ul class="list-unstyled data">
                <li>
                    <a href="" class="d-block">
                        <i class="fa-solid fa-house"></i>
                        <span>{{__('admin.show_students')}}</span>
                    </a>
                </li>
                <li>
                    <a href="" class="d-block">
                        <i class="fa-solid fa-house"></i>
                        <span>{{__('admin.add_student')}}</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="" class="d-block toggle-ul">
                <div class="item-name">
                    <i class="fa-solid fa-house"></i>
                    <span>{{__('admin.courses')}}</span>
                </div>
                <div class="item-icon">
                    <span class="items-count bg-primary">6</span>
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                        <i class="fa-solid fa-angles-left"></i>
                    @endif
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "ar")
                        <i class="fa-solid fa-angles-right"></i>
                    @endif
                </div>
            </a>
            <ul class="list-unstyled data">
                <li>
                    <a href="" class="d-block">
                        <i class="fa-solid fa-house"></i>
                        <span>{{__('admin.show_courses')}}</span>
                    </a>
                </li>
                <li>
                    <a href="" class="d-block">
                        <i class="fa-solid fa-house"></i>
                        <span>{{__('admin.add_course')}}</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="" class="d-block toggle-ul">
                <div class="item-name">
                    <i class="fa-solid fa-house"></i>
                    <span>{{__('admin.instructions')}}</span>
                </div>
                <div class="item-icon">
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                        <i class="fa-solid fa-angles-left"></i>
                    @endif
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "ar")
                        <i class="fa-solid fa-angles-right"></i>
                    @endif
                </div>
            </a>
            <ul class="list-unstyled data">
                <li>
                    <a href="" class="d-block">
                        <i class="fa-solid fa-house"></i>
                        <span>{{__('admin.show_instructions')}}</span>
                    </a>
                </li>
                <li>
                    <a href="" class="d-block">
                        <i class="fa-solid fa-house"></i>
                        <span>{{__('admin.add_instructions')}}</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>