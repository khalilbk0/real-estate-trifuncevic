import React from 'react'

function home() {
  return (
 <>
     <div class="gallery-home slider section">
      <div class="slide">
        <img src="assets/back-sl-img1.png" alt="gallery-photo" />
      </div>

      <div class="slide">
        <img src="assets/back-sl-img2.png" alt="gallery-photo" />
      </div>

      <div class="slide">
        <img src="assets/back-sl-img3.png" alt="gallery-photo" />
      </div>

      <div class="slide">
        <img src="assets/back-sl-img4.png" alt="gallery-photo" />
      </div>

      <div class="slide">
        <img src="assets/back-sl-img5.png" alt="gallery-photo" />
      </div>

      <button class="slider__btn slider__btn--left none">&larr;</button>
      <button class="slider__btn slider__btn--right none">&rarr;</button>
      <div class="dots"></div>
    </div>

    <div class="container">
      <div class="onama-sec section">
        <div class="h-text">
          <h2 class="sec-h">O NAMA</h2>
          <p>
            Dobrodošli u D.O.O. `&ldquo;`TRIFUNČEVIĆ`&ldquo;`, građevinsko preduzeće koje je
            postalo sinonim za kvalitet i pouzdanost u izgradnji nekretnina u
            Bijeljini i šire. Osnovano davne 1975. godine kao samostalna
            zanatska radnja `&ldquo;`Zidar`&ldquo;` sa samo pet zaposlenih, danas smo se razvili
            u moderno i inovativno preduzeće koje zapošljava preko sedamdeset
            stručnih radnika.
            <br /><br />
            Naša osnovna djelatnost je izgradnja stanova, poslovnih prostora i
            garaža. Prednjačimo u odnosu na konkurenciju, jer posjedujemo
            vlastitu mehanizaciju i opremu za izvođenje građevinskih radova, a
            za kooperante imamo provjerena preduzeća koja izvode instalaterske i
            zanatske radove.
            <br /><br />
            Uz izgradnju naših vlastitih projekata, sa zadovoljstvom sarađujemo
            sa vlasnicima građevinskih parcela i suinvestitorima, sa kojima
            zaključujemo ugovore o zajedničkoj izgradnji. Za uloženo zemljište,
            suinvestitorima dajemo adekvatnu protivvrijednost u novoizgrađenim
            stanovima i poslovnim prostorima.

            <br /><br />
            Izaberite D.O.O. `&ldquo;`TRIFUNČEVIĆ`&ldquo;` za svoj budući dom ili poslovni
            prostor i uvjerite se u našu stručnost, pouzdanost i predanost
            kvalitetnoj izgradnji.
          </p>
        </div>
        <div class="img-owner">
          <img src="assets/owner.png" alt="owner" />
          <h3>OSNIVAČ: ŽARKO TRIFUNČEVIĆ</h3>
        </div>
      </div>
    </div>

    <div class="info section">
      <div class="info-wrapper"></div>
      <div class="container">
        <div class="content-wrapper center-info">
          <div class="info-card shift">
            <img src="assets/law.png" alt="law" />
            <h3 class="card-heading">Zakonski sigurno</h3>
            <p class="card-text">
              Registracija svih stambeno poslovnih jedinica i poštovanje
              zakonskih propisa i standarda su važni za kvalitet građevinskog
              sektora.
            </p>
          </div>

          <div class="info-card">
            <img src="assets/keys.png" alt="keys" />
            <h3 class="card-heading">Tradicionalno</h3>
            <p class="card-text">
              45 godina iskustva uspješne prodaje i izgradnje stambeno poslovnih
              objekata.
            </p>
          </div>

          <div class="info-card shift">
            <img src="assets/home.png" alt="house" />
            <h3 class="card-heading">Kvalitetno</h3>
            <p class="card-text">
              Najviši standardi savremenog građevinarstva i primjena
              najkvalitetnijih materijala u izgradnji objekata.
            </p>
          </div>

          <div class="info-card">
            <img src="assets/building.png" alt="building" />
            <h3 class="card-heading">Profesionalno</h3>
            <p class="card-text">
              Maksimalna predanost naših radnika garantuje poštovanje svih
              ugovorenih obaveza. Posvećenost našim klijentima je na prvom
              mjestu.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="nums-info section">
      <div class="container num-wrap">
        <div class="num-wrapper">
          <div class="num count" id="count1">0</div>
          <div class="num-text">Godina Postojanja</div>
        </div>

        <div class="num-wrapper">
          <div class="num" id="count2">0+</div>
          <div class="num-text">Zadovoljnih klijenata</div>
        </div>

        <div class="num-wrapper last-num">
          <div class="num" id="count3">0</div>
          <div class="num-text">Nekretnina</div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="map-section section">
        <h2 class="sec-h">NAŠA LOKACIJA</h2>
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d177.06759113322974!2d19.21003496736337!3d44.7587534240077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475be8e076a26431%3A0xd4abc0bcd9830817!2zVHJpZnVuxI1ldmnEhw!5e0!3m2!1ssr!2sba!4v1678997835200!5m2!1ssr!2sba"
            width="600"
            height="450"
            style={{border:0}}
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div></>
  )
}

export default home