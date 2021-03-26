<script>
  export let title;
  export let year;
  export let description;
  export let featuring = null;
  export let techs = null;
</script>

<div
  class="bg-gray-light rounded-xl p-6 shadow-md transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
>
  <h3 class="text-turquoise text-2xl">{title}</h3>
  <p class="text-green text-xl"># Made {year}</p>
  <p class="text-blue-light content-color">{description}</p>
  {#if featuring && featuring.length > 0}
    <p class="text-green text-xl"># With {featuring.join(", ")}</p>
  {/if}
  {#if techs && techs.length > 0}
    <p class="text-cream text-xl">
      Tech = [ {@html techs
        .map((tech) => `<span class="text-purple">${tech}</span>`)
        .join(", ")} ]
    </p>
  {/if}
</div>
