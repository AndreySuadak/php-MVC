<body class="d-flex h-100 text-center text-warning bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
 <header class="mb-auto">
  <div>
   <h3 class="float-sm-start mb-0">
     <div id="div_logo">
       <a href="/" class="nav-link active text-warning" id="logo">
         <svg width="30%" height="30%" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet" >
           <rect id="svgEditorBackground" x="0" y="0" width="100" height="100" style="fill: none;"/>
           <path id="e10_area3" d="M37.274451,73.097798c-3.891201,0.4,-5.1357,0.691282,-7.285754,2.494519c-2.866807,3.066992,-1.362226,8.563594,1.747026,14.03637c1.277234,1.245041,2.833964,3.574573,7.44073,3.15701c-4.384216,-6.33639,-6.719932,-14.129005,-1.352396,-19.785547Z" style="fill:#8B4513; stroke-width: 1px;" />
           <path id="e16_area3" d="M38.296236,73.224937c-4.1084,3.0801,-2.8631,4.8523,-3.7769,8.1877c0.4437,4.4065,0.666,3.3348,4.1149,11.5276c9.3398,1.3441,18.0932,0.382,23.6471,-0.1c5.7512,-1.1473,13.3424,-1.7325,14.5998,-7.6663c-15.3154,-2.8335,-24.0766,-11.2115,-38.5569,-11.9928Z" style="fill:saddlebrown; stroke-width: 1px;" />
           <path id="e20_arc3" d="M38.210376,73.059047c-5.5243,4.2559,-4.8478,12.2604,0.6765,19.9549" style="fill:none;stroke:#4F270B;stroke-width:1px;" />
           <path id="e23_pathV" d="M50.392545,12.474546v61.443" style="fill:peru;stroke:saddlebrown;stroke-width:1px;" />
           <path d="M49.605343,18.94052q-41.841123,28.54679,-20.743719,54.678614q-6.161061,-24.261821,43.968063,7.102458q-36.072333,-32.525791,-23.223344,-61.669072Z" style="fill:#0000D9; stroke-width: 1px;" />
           <line id="e2_line" x1="37.936710" y1="73.406281" x2="23.618710" y2="63.006065" style="stroke:#592C0C;fill:none;stroke-width:1px;"/>
           <path id="e25_area3" d="M49.772404,13.038286c-0.891,-3.389,-15.8939,-0.2306,-23.224,5.411c23.8994,-6.8722,23.232,2.217,23.563,-1.24c-1.642,-2.386,-1.871,-2.192,-0.338,-4.171Z" style="fill:#0000DD; stroke-width: 1px;" />
         </svg>
       </a>
     </div>

   </h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active text-secondary " aria-current="page" href="/">
          Home
        </a>

        <a class="nav-link text-secondary" href="/contact">
          Contact
        </a>

        <!-- Если куки пустой=== пользователь не авторизован/не зареисрирован  -->
        <!-- покащываем эти две кнопки -->
        <?php if($_COOKIE['login'] == ''): ?>

        <a class="nav-link text-secondary" href="/user/reg">
          Sign up
        </a>

        <a class="nav-link text-secondary" href="/user/auth">
          Log in
        </a>

        <!-- Иначе пользоватедь зарегестрирован и мы показываем каюинет -->
        <?php else: ?>

          <a class="nav-link text-secondary dashboard" href="/user/dashboard">
            Dashboard
          </a>

        <?php endif; ?>

      </nav>
  </div>
 </header>
