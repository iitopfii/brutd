<script setup>
  import axios from 'axios'

  const test = async () => {

    var form = document.getElementById('form_update');
    var formData = new FormData(form);
    res = await axios.post('http://localhost:3000/api/index.php', formData).then(function (response) {
      console.log(response.data);
      return response.data
    })


  }
</script>
<template>
  <section id="header">
    <div class="w-full h-28 bg-gray-900">
      <div class="p-7 text-md text-white flex justify-between">
        <div class="flex self-center relative">
          <img src="./assets/images/logo.png" class="w-14" alt>
          <div class="w-[2px] bg-white mr-4 ml-2"></div>
          <h1 class="self-center text-4xl align-middle z-10" style="font-family:'pricedow';">BURIRAM <span
              class="text-blue-500 stroke-1 stroke-white">City</span></h1>
          <span class="absolute right-0 bottom-0 -mb-3 text-2xl z-10"
            style="font-family: 'pricedow';color:#f472b6 !important;">Community</span>
          <!-- <img src="./assets/images/bg_logo.png" class="absolute w-44 right-0" style="margin-right: -10px;" alt> -->
        </div>
        <div class="ml-10 flex items-baseline space-x-4 self-center text-lg">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class=" text-white bg-gray-800 px-3 py-2 rounded-md text-sm font-medium w-[100px] text-center"
            aria-current="page">Home</a>

          <a href="#"
            class="text-gray-300  hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
            GTA Fivem
          </a>

          <a href="#"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

          <a href="#"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Guides</a>

          <a href="#"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Support</a>
        </div>
        <div class="self-center">
          <button
            class="bg-gray-800 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded border-solid border-2 border-white">
            Join Server
          </button>
          <button
            class="bg-gray-800 ml-5 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded border-solid border-2 border-white ">
            Login
          </button>


        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="h-auto bg-gray-400 insepct-bg z-30">
      <div class="h-[570px] bg-sec-1">
        <div class="flex justify-between items-center h-full pl-20 pr-20 ">
          <div class="flex flex-col w-4/12 animate__animated animate__backInLeft animate__delay-1s">
            <h1 class="lg:text-5xl md:text-[28px] font-bold text-white mb-10 relative">
              BURIRAM <span class="text-blue-500">City</span>
              <span class="lg:text-[23px] md:text-[18px] absolute bottom-0 -mb-5 lg:-ml-32 md:-ml-18">Roleplay</span>
            </h1>
            <p class="lg:text-2xl md:text-[18px] text-white">
              Grand Theft Auto Online Roleplay <br />
              Experience GTA Online, a dynamic and ever-evolving online universe for up to 30 players, where you can
              rise from street-level hustler to become a kingpin of your own criminal empire.
            </p>
          </div>
          <div class="w-4/12"></div>
          <div class="w-4/12 text-white relative animate__animated animate__backInRight animate__delay-1s">
            <img src="./assets/images/cc1.png" class="absolute -mt-28 z-50" alt>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="h-[800px] bg-gray-400 bg-sec-2">
    <div class="bg-[#000000b3] h-full p-20 ">
      <div class=" lg:flex lg:mt-12 md:mt-0  animate__animated animate__fadeInUp animate__delay-2s">
        <div class="lg:w-1/2 md:w-full">
          <div class="
          md:h-[550px] md:h-[370px] md:pt-[75px] md:pl-[85px] md:bg-[length:550px_370px] 
          lg:w-[550px] lg:h-[370px] lg:pt-[75px] lg:pl-[85px] lg:bg-[length:550px_370px] 

          bg-[url('http://localhost:4000/src/assets/images/gg.png')] 
          bg-no-repeat">
            <iframe class="z-10 lg:w-[380px] lg:h-[220px] md:w-[380px] md:h-[220px]"
              src="https://www.youtube.com/embed/lAyoEFPTkPg" title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
        </div>
        <div class="lg:w-1/2 md:w-full">
          <div class="flex flex-col">
            <h1 class="text-5xl font-bold text-white mb-10 relative lg:mt-16 md:mt-12">
              BURIRAM <span class="text-blue-500">City</span>
              <span class="text-[23px] absolute bottom-0 -mb-5 -ml-32">Roleplay</span>
            </h1>
            <p class="text-2xl text-white">
              Grand Theft Auto Online Roleplay <br />
              Experience GTA Online, a dynamic and ever-evolving online universe for up to 30 players, where you can
              rise from street-level hustler to become a kingpin of your own criminal empire.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="h-[600px] bg-[#1b1b1b] p-20 text-white">
      <div class="flex">
        <div class="w-4/12 text-center">

          <form method="POST" id="form_update" enctype="multipart/form-data">
            <input type="file" name="inputFile" ref="file" placeholder="Type here"
              class="input input-bordered input-success w-full max-w-xs p-1" />
          </form>

          <button @click="test()" type="button"
            class="bg-gray-800 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded border-solid border-2 border-white">
            Upload
          </button>

        </div>
        <div class="w-4/12 text-center">
          b2
        </div>
        <div class="w-4/12 text-center">
          b3
        </div>
      </div>
    </div>
  </section>



  <!-- <RouterView /> -->
</template>

<style scoped>
  @font-face {
    font-family: 'pricedow';
    src: url('@/assets/fonts/pricedow.ttf');
  }

  .video-show {
    padding: 100px 0px 0px 116px;
    background-image: url("./assets/images/gg.png");
    background-repeat: no-repeat;
    background-size: 750px;
    width: 750px;
    height: 475px;
  }

  /* @media only screen and (max-width: 720px){
    .video-show {
      padding: 75px 0px 00px 85px;
      background-size: 550px;
      width: 550px !important;
      height: 370px !important;
    }
  } */



  .scrollbar-none::-webkit-scrollbar {
    display: none;
  }

  .insepct-bg {
    background-image: url('./assets/images/bg-main.jpg') !important;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }

  .stork_text {
    text-shadow: rgb(255, 255, 255) 3px 0px 0px, rgb(255, 255, 255) 2.83487px 0.981584px 0px, rgb(255, 255, 255) 2.35766px 1.85511px 0px, rgb(255, 255, 255) 1.62091px 2.52441px 0px, rgb(255, 255, 255) 0.705713px 2.91581px 0px, rgb(255, 255, 255) -0.287171px 2.98622px 0px, rgb(255, 255, 255) -1.24844px 2.72789px 0px, rgb(255, 255, 255) -2.07227px 2.16926px 0px, rgb(255, 255, 255) -2.66798px 1.37182px 0px, rgb(255, 255, 255) -2.96998px 0.42336px 0px, rgb(255, 255, 255) -2.94502px -0.571704px 0px, rgb(255, 255, 255) -2.59586px -1.50383px 0px, rgb(255, 255, 255) -1.96093px -2.27041px 0px, rgb(255, 255, 255) -1.11013px -2.78704px 0px, rgb(255, 255, 255) -0.137119px -2.99686px 0px, rgb(255, 255, 255) 0.850987px -2.87677px 0px, rgb(255, 255, 255) 1.74541px -2.43999px 0px, rgb(255, 255, 255) 2.44769px -1.73459px 0px, rgb(255, 255, 255) 2.88051px -0.838247px 0px;
  }

  .bg-sec-1 {
    background-image: url('./assets/images/cl1.png');
    background-repeat: no-repeat;
    /* background-color: black; */
    background-position: center;
    /* background-size: cover; */
  }

  .bg-sec-2 {
    background-image: url('./assets/images/bg-sec.jpg');
    background-repeat: no-repeat;
    /* background-color: black; */
    background-position: center;
    /* background-size: cover; */
  }
</style>