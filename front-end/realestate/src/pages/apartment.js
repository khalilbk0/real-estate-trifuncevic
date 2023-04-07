import axios from 'axios'
import { useRouter } from 'next/router'
import React, { useEffect, useState } from 'react'

function Appartment() {
  const [Apartment, setApartment] = useState({})
  const [Structure, setStructure] = useState([])

  const router = useRouter()

  useEffect(() => {
    const fetchData = async () => {
      const res = await axios.get(
        `http://localhost:1234/api/apartmentDetails.php?id=${router.query.id}`
      )
      setApartment(res.data[0])
      setStructure(res.data[0].structure)
    }

    fetchData()
  }, [router.query.id])

  return (
    <div>
      <div className="background-section">
        <h1>Neka vaša potraga za savršenim domom bude jednostavna i ugodna.</h1>
      </div>
      <div className="container">
        <div className="ad-info-wrapper">
          <div className="gallery">
            <img
              src={`http://localhost:1234/${Apartment.main_image}`}
              alt="gallery"
              style={{ height: '100%', width: '100%' }}
            />
          </div>
          <div className="info-part">
            <h3 className="squarefeet">{Apartment.squarefeet}</h3>
            {Structure && Structure.length > 0 && Structure.map((el) => {
              return (
                <div className="icon-info" key={el.id}>
                  <img
                    src={`http://localhost:1234/${el.icon}`}
                    width={64}
                    height={64}
                    alt="icon"
                    className="icon"
                  />
                  <div className="info">{el.value}</div>
                </div>
              )
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

export default Appartment