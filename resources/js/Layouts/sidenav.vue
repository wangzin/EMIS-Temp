<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/dashboard" class="brand-link">
       <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>EMIS</b> (Dashboard) </span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Administration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/profileHome" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p>User Profile Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/aclhome" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p>ACL Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/masterManagement" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p>Master Management</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview" id="organizationlinksection">
            <a href="#" class="nav-link" id="organizationlink">
              <i class="nav-icon fas fa-home"></i>
              <p>
                 Organization
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/organizationIndex" class="nav-link" id="schoolLink">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p>School</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/aclhome" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p> ECR</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/masterManagement" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p>ECCD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/masterManagement" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p>Others</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/staffManagement" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Staff Management
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                 Student Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/organizationIndex" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p>Regular Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/aclhome" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p> CE Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/masterManagement" class="nav-link">
                  <i class="fa fa-angle-double-right nav-icon"></i>
                  <p>ECCD Student</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="/usermanagement" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Search
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
</template>
<script>
import JetApplicationMark from '@/Jetstream/ApplicationMark'
export default {
    
}
</script>