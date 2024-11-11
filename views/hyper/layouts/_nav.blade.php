<div class="header-navbar">
    <div class="container header-flex">
        <!-- LOGO -->
        <a href="/" class="topnav-logo" style="float: none;">
            <img src="{{ picture_ulr(dujiaoka_config_get('img_logo')) }}" height="50">
            <div class="logo-title">{{ dujiaoka_config_get('text_logo') }}</div>
        </a>
        <!-- search -->
        <div class="title-search">
                    <div class="position-relative">
                        <input type="text" class="form-control" id="search" placeholder="{{ __('hyper.home_search_box') }}">
                        <span class="uil-search"></span>
                    </div>
                </div>
        <!-- 菜单容器 -->
        <div class="menu-container">
          <a class="btn head-menu-con" href="https://t.me/faka8ink" target="_blank">
             <i class="noti-icon uil-comments search-icon"></i>
             在线客服
          </a>
          <a class="btn head-menu-sc" href="{{ url('order-search') }}">
             <i class="noti-icon uil-file-search-alt search-icon"></i>
             查询订单
          </a>
      </div>
    </div>
</div>