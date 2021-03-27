<script>
  import BasePage from "../Components/BasePage.svelte";
  import ProjectCard from "../Components/ProjectCard.svelte";
  import ProjectSectionHeading from "../Components/ProjectSectionHeading.svelte";
</script>

<BasePage>
  <div class="grid grid-cols-1 gap-6">
    <ProjectSectionHeading>Applications</ProjectSectionHeading>
    <ProjectCard
      title="FHWS@IoT Device Finder"
      year="2020"
      description="A device ip tracking system, that helps by finding a devices ip address in a restrictive network where DHCP is enabled. Consisting of IoT devices and a webfrontend."
      featuring={["Julian Z."]}
      techs={["Angular", ".NET Core", "Python "]}
    />
    <ProjectCard
      title="View"
      year="2018"
      description="A realtime room occupancy tracking system. Consisting of IoT devices and a webfrontend."
      featuring={["Julian Z.", "Achim W.", "Lars W."]}
      techs={["Angular", ".NET Core", "C++ "]}
    />
    <ProjectSectionHeading>Mobile-Apps</ProjectSectionHeading>
    <ProjectCard
      title="Pfandrechner"
      year="2019"
      description="Crossplatform App for calculating deposit."
      techs={["Flutter"]}
    />
    <ProjectSectionHeading>Games</ProjectSectionHeading>
    <ProjectCard
      title="DotGameReloaded"
      year="2018"
      description="A multiplayer game about dot cannibalism... "
      techs={["	Typescript", "Node.js"]}
    />
  </div>
</BasePage>
