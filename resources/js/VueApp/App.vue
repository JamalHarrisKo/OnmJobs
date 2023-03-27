<template> 
  <header>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" />


    <!-- Add Navigation via router Links -->
    <nav>
      <RouterLink to="/">Home</RouterLink>
  
      <RouterLink to="/jobs">Jobs</RouterLink>

      <RouterLink to="/Ausbildung">Ausbildung</RouterLink>
    </nav>

  </header>
  <!-- Render content with router -->
  <div class="content-container">

  <RouterView />
  </div>
</template>
<style>
body {
  margin: 0 !important;
  padding: 0 !important;
  font-family: Arial, Helvetica, sans-serif;
}

.content-container {
  max-width: 1500px;
  margin: 0 auto;
  background-color: #FAF9F6;
  padding: 2rem;
}

nav {
  background-color: gray;
  padding: 1rem;
  display: flex;
  justify-content: center;
}

nav a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  margin: 0 1rem;

}
</style>