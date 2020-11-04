<template>
  <div class="min-h-screen bg-gray-100">
    <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <headnav/>
        <sidenav />
        <div class="content-wrapper">
          <section class="content">
          <div class="container-fluid">
            <main>
                <slot></slot>
            </main>
          </div>
        </section>
        </div>
      </div>
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE link</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.0.5
        </div>
      </footer>
    </body>
  </div>
</template>

