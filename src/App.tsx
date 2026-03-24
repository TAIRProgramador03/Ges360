import { Swiper, SwiperSlide } from "swiper/react";
import { EffectCoverflow, Autoplay } from "swiper/modules";

import "swiper/css";
import "swiper/css/effect-coverflow";
import "swiper/css/pagination";
import { useState } from "react";

function App() {
  const titulos = [
    "Gescon",
    "Gesneu",
    "Gescon",
    "Gescom",
    "Gescon",
    "Gesneu",
    "Gescon",
    "Gescom",
    "Gescon",
    "Gesneu",
    "Gescon",
    "Gescom",
  ];
  const links = [
    "",
    "gesneu.tair360.net",
    "",
    "gescom.tair360.net",
    "",
    "gesneu.tair360.net",
    "",
    "gescom.tair360.net",
    "",
    "gesneu.tair360.net",
    "",
    "gescom.tair360.net",
  ];
  const [name, setName] = useState(titulos[0]);
  const [url, setUrl] = useState(links[0]);

  return (
    <main className="relative">
      <img
        src="/image/background.webp"
        className="fixed top-0 left-0 w-full h-screen -z-50 opacity-50 object-cover"
      />
      <div className="w-[90%] lg:container mx-auto lg:w-full min-h-[calc(100vh-64px)] flex flex-col py-16 gap-12">
        <div className="w-full flex flex-col justify-center items-center gap-12">
          <div id="preloader" className="w-[275px] h-[154px]">
            <div className="presentation">
              <div className="rotating-wheel"></div>
              <div className="small-white-bg"></div>
              <div className="logo-ta"></div>
            </div>
          </div>
          <h1 className="uppercase font-medium text-2xl text-[#0D4871]">
            Transformación digital
          </h1>
        </div>
        <div className="w-full h-[350px]">
          <Swiper
            loop={true}
            effect={"coverflow"}
            grabCursor={true}
            centeredSlides={true}
            spaceBetween={60}
            slidesPerView={3}
            breakpoints={{
              320: {
                slidesPerView: 1,
                spaceBetween: 60,
              },
              767: {
                slidesPerView: 2,
                spaceBetween: 60,
              },
              1024: {
                slidesPerView: 3,
                spaceBetween: 60,
              },
            }}
            coverflowEffect={{
              rotate: -2,
              stretch: 1,
              depth: 50,
              modifier: 5,
              slideShadows: true,
            }}
            autoplay={{
              delay: 2500,
              pauseOnMouseEnter: true,
            }}
            modules={[EffectCoverflow, Autoplay]}
            onSlideChange={(swiper) => {
              const indexReal = swiper.realIndex; // Esto siempre será 0, 1 o 2
              setName(titulos[indexReal]);
              setUrl(links[indexReal]);
            }}
            className="mySwiper w-full h-full"
          >
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescon.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] rounded-xl border border-[#B9B9B9] shadow-2xl overflow-hidden">
              <img
                src="/image/gesneu.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescon.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescom.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescon.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gesneu.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescon.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescom.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescon.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gesneu.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescon.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
            <SwiperSlide className="h-[350px] border border-[#B9B9B9] shadow-xl rounded-xl overflow-hidden">
              <img
                src="/image/gescom.webp"
                className="w-full h-[350px] object-cover"
              />
            </SwiperSlide>
          </Swiper>
        </div>
        <div className="w-full flex flex-col justify-center items-center animate-bounce">
          <div className="w-0 h-0 border-[10px] border-t-0 border-b-[20px] border-transparent border-b-[#0B365E]" />
          <div className="w-[250px] h-[150px] bg-[#0B365E] rounded-lg text-white flex flex-col justify-center items-center gap-2">
            {url == "" ? <span></span> : <span>v1.0.0</span>}
            <h3 className="font-medium text-4xl uppercase">{name}</h3>
            {url == "" ? (
              <span className="text-white">Próximamente...</span>
            ) : (
              <a
                href={`https://${url}`}
                target="_blank"
                className="px-6 py-1 bg-[#12C4B6] rounded-md cursor-pointer"
              >
                Ingresar
              </a>
            )}
          </div>
        </div>
      </div>
      <footer className="w-[90%] lg:container mx-auto lg:w-full h-[64px] flex flex-col md:flex-row justify-between items-center text-[#051e2f] lg:text-xl gap-2 md:gap-0 text-center md:text-start">
        <span>Grupo Ibárcena 2026</span>
        <span>Todos los derechos reservados - Tecnología de Información</span>
      </footer>
    </main>
  );
}

export default App;
