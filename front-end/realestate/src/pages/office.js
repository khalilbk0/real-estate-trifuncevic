import axios from 'axios'
import { useRouter } from 'next/router'
import React, { useEffect, useState } from 'react' 
import { Carousel } from 'react-bootstrap'  
function Office() {
  const [Apartment, setApartment] = useState({})
  const [Structure, setStructure] = useState([])
  const [Carrousel, setCarrousel] = useState([])
  const router = useRouter()

  useEffect(() => {
    const fetchData = async () => {
      return await axios.get(
        `https://testing.tvikonekretnine.com/api/OfficeById.php?id=${router.query.id}`
      ) 
   
    }

    try {
      fetchData().then(async (res) => {

        console.log(res)
        console.log(res.data)
        let app = res.data[0]
        setStructure(res.data[0].structure)
        setApartment(app)  
        let array = app.other_images? app.other_images : [app.main_image]
        console.log(array)
        array.push(app.main_image) 
        setCarrousel(array.reverse())
        console.log(Carrousel)
      })
    } catch (error) {
      console.warn(error)
    }
   


  }, [router.query.id])

  return (
    <div>
      <div className="background-section">
        <h1 style={{fontSize:"1.5em", fontWeight:700}} >Neka vaša potraga za savršenim domom bude jednostavna i ugodna.</h1>
      </div>
      <div className="container">
        <div className="ad-info-wrapper">
          <div className="gallery">
        {/*     <img
              src={`https://testing.tvikonekretnine.com/${Apartment.main_image}`}
              alt="gallery"
              style={{ height: '100%', width: '100%' }}
            /> */}
<Carousel slide={false} nextLabel='' prevLabel=''>
  {Carrousel.map((el, key) => (
    <Carousel.Item key={key}>
      <img
        className="img-fluid"
        onClick={() => {alert('lightbox not completed yet!')}}
        src={`https://testing.tvikonekretnine.com/${el}`}
        alt={`Slide ${key}`}
      />
    </Carousel.Item>
  ))}
</Carousel>
          </div>
          <div className="info-part">
            <h3 className="squarefeet">{Apartment.squarefeet}</h3>
            {Structure && Structure.length > 0 && Structure.map((el) => {
             
             if(el.value !== ""){
              return (
                <div className="icon-info" key={el.id}>
                  <img
                    src={`https://testing.tvikonekretnine.com/${el.icon}`}
                    width={64}
                    height={64}
                    alt="icon"
                    className="icon"
                  />
                  <div className="info">{el.value}</div>
                </div>
              )
             }
             
       
            })}
          </div>
        </div>

        <div className="ad-description">
          <h2>OPIS:</h2>
          <p className="ad-des">{Apartment.description} </p>
        </div>

        <div className="contact-info">
          <div className="phone">
            <h2 className="ph-h">KONTAKT TELEFON:</h2>
            <h2 className="number">+387 55 213 350</h2>
            <h2 className="number">+387 65 513 720</h2>
          </div>

          <div className="socials">
            <h2 className="ph-h">DRUŠTVENE MREŽE:</h2>
            <div className="soc-icons">
              <a href="">
                <img src="assets/instagram.png" alt="insta" />
              </a>
 

            <a href="">

              <img src="assets/facebook.png" alt="fb"/>
            </a>
            <a href="">

              <img src="assets/tik-tok.png" alt="tik tok"/>
            </a>

            <a href="">
              <img src="assets/youtube.png" alt="yt"/>

            </a>
          </div>
        </div>
      </div>

      <div className="see-more">
        <h2 className="more-h">POGLEDAJTE VIŠE NEKRETNINA</h2>
        <button className="more-btn"><div className="text-btn">POGLEDAJTE JOŠ</div><img src="assets/play.png" alt="play btn" className="more-em"/></button>
      </div>
    </div>
    </div>
  )
}

export default Office