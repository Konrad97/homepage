<script>
  import { Router, Link, Route } from "svelte-routing";

  import Index from "./Pages/Index.svelte";
  import Projects from "./Pages/Projects.svelte";
  import Other from "./Pages/Other.svelte";
  import Footer from "./Components/Footer.svelte";
  import NotFound from "./Pages/NotFound.svelte";

  export let url = "";
</script>

<Router {url}>
  <div
    class="bg-gray min-h-screen min-w-screen flex flex-col items-stretch justify-start font-mono text-white"
  >
    <nav
      class="bg-gray-light flex justify-center items-stretch flex-col sm:flex-row"
    >
      <Link
        class="px-9 py-6 outline-none text-white text-2xl text-center hover:bg-gray"
        to="/index">index.html</Link
      >
      <Link
        class="px-9 py-6 outline-none text-white text-2xl text-center hover:bg-gray"
        to="/projects">projects.html</Link
      >
      <Link
        class="px-9 py-6 outline-none text-white text-2xl text-center hover:bg-gray"
        to="/other">other.html</Link
      >
    </nav>
    <main class="flex justify-center flex-grow">
      <div class="w-full max-w-3xl m-5 p-2">
        <Route path="index" component={Index} />
        <Route path="projects" component={Projects} />
        <Route path="other" component={Other} />
        <Route path="*" component={NotFound} />
      </div>
    </main>
    <Footer class="flex"></Footer>
  </div>
</Router>

<style global>
  @tailwind base;
  @tailwind components;
  @tailwind utilities;
</style>
