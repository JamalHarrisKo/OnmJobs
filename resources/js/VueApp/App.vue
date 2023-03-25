<template> 
  <header>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" />


    <!-- Add Navigation via router Links -->
    <nav>
      <RouterLink to="/">Home</RouterLink>
      <span>-</span>
      <RouterLink to="/jobs">Jobs</RouterLink>
      <span>-</span>
      <RouterLink to="/Ausbildung">Ausbildung</RouterLink>
    </nav>

  </header>
  <!-- Render content with router -->
  <RouterView />
</template>