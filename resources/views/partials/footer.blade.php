<div>
    <div id="footer">
      <div class="container">
        <nav>
            @foreach ( config('db.footer_menus') as  )
                
            @endforeach
          <ul v-for="menu in navMenus">
            <li v-for="(link,index) in menu">
              <h3 v-if="index==0">{{link.title}}</h3>
              <a v-else :href="link.href">{{ link.text }}</a>
            </li>
          </ul>
        </nav>
        <img id="footer-bg-logo" src="../assets/img/dc-logo-bg.png">
      </div>
      <div id="footer-banner">
        <div class="container">
          <nav>
            <a class="call-to-action" href="#">sign-up now!</a>
            <div class="social-container">
              <p>follow us</p>
              <ul>
                <li v-for="icon in navIcons"><a href="#"><img :src="getImagePath(icon.image)" :alt="`${icon.social} logo`"></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>