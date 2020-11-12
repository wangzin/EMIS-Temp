<template>
  <div class="min-h-screen bg-gray-100">
    <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <headnav/>
        <sidenav />
        <vue-progress-bar></vue-progress-bar>
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
       <footer />
    </body>
  </div>
</template>

