<x-main >
    <x-slot name='title'>Servizi</x-slot>
    <div class="container text-center d-flex align-items-center justify-content-center mt-5">
      <div class="row  col-6 col-md-8 justify-content-evenly" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
      data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
      data-aos-anchor-placement="top-center">
        @foreach ($services as $service)
            <x-card :name="$service['name']" :uri="$service['uri']"/>
        @endforeach
      </div>
    </div>
</x-main>