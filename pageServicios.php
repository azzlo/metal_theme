
<?php
/*Template Name: Page Servicios*/
?>

<?php get_header();?>
<div class="container page-container">
  <div class="row">
    <h1 class="text-center page-title">Nuestros Servicios</h1>
    <div class="page-thumbnail">
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

        </div>
      <?php endif; ?>
    </div>

    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Conformado</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3>Prensa de Cortina CNC Baikal</h3>
          <figure>
            <img src="<?php bloginfo(stylesheet_directory)?>/img/baikal.JPG" alt="" class="imgServicio" style="width:100%; height:auto;">
            <figcaption>
              <p>De 350 toneladas y Mesa de 3000mm de longitud.</p>
            </figcaption>
          </figure>

        </div>
        <div class="col-md-6">
          <h3>Prensa de Cortina Durman</h3>
          <figure>
            <img src="<?php bloginfo(stylesheet_directory)?>/img/durman.jpg" alt="" class="imgServicio" style="width:100%; height:auto;">
            <figcaption>
              <p>CNC de 400 Ton. En TANDEM  8.600 Mts de longitud total.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-6">
          <h3>Prensa Convencional</h3>
          <figure>
            <img src="<?php bloginfo(stylesheet_directory)?>/img/convencional.JPG" alt="" class="imgServicio" style="width:100%; height:auto;">
            <figcaption>
              <p>Sirve para comprimir una cosa; está compuesta básicamente de dos plataformas rígidas que se aproximan por accionamiento mecánico, hidráulico o manual de una de ellas.</p>
              <table>
                <thead>
                  <th colspan="3">ESPECIFICACIONES</th>
                </thead>
                <tbody>
                  <tr>
                    <td>Fuerza Nominal</td>
                    <td colspan="2">125Tons</td>
                  </tr>
                  <tr>
                    <td>Espesor de flexión máxima</td>
                    <td colspan="2">5 mm (acero dulce) de 2,5 mm (acero inoxidable)</td>
                  </tr>
                  <tr>
                    <td>Max longitud de plegado</td>
                    <td colspan="2">3200mm</td>
                  </tr>
                  <tr>
                    <td>Distancia entre agujeros</td>
                    <td colspan="2">2500mm</td>
                  </tr>
                  <tr>
                    <td>Viajes Slide</td>
                    <td colspan="2">120mm</td>
                  </tr>
                  <tr>
                    <td>Altura máxima abierta</td>
                    <td colspan="2">380mm</td>
                  </tr>
                  <tr>
                    <td>Energía del motor principal</td>
                    <td colspan="2">7.5kW</td>
                  </tr>
                  <tr>
                    <td>Peso</td>
                    <td colspan="2">7500Kg</td>
                  </tr>
                  <tr>
                    <td>Dimensión total(LXWXH)</td>
                    <td colspan="2">3400mmX1600mmX2500mm</td>
                  </tr>
                  <tr>
                    <td rowspan="3">Presición:</td>
                    <td>Desviación del ángulo de flexión</td>
                    <td><± 0,5 º / metro</td>
                  </tr>
                  <tr>
                    <td>Posición Volver vía</td>
                    <td>≤ ± 0.10mm</td>
                  </tr>
                  <tr>
                    <td>Rectitud de la pieza de trabajo</td>
                    <td>≤0.75mm/metro</td>
                  </tr>
                </tbody>
              </table>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>



    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Corte</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3>Sierra Cinta</h3>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/sierraCinta.JPG" alt="" class="imgServicio" style="width:100%; height:auto;">
          <figcaption>
            <p>La sierra cinta es la más popular de las sierras, debido al uso continuo de toda la cinta, resultando en cortes uniformes por la distribución constante de la carga de corte en cada diente de la sierra.</p>
            <table>
              <thead>
                <th>ESPECIFICACIÓN</th>
                <th>UNIDAD DE MEDIDA</th>
                <th>VALOR</th>
              </thead>
              <tbody>
                <tr>
                  <td>Capacidad de corte redondo</td>
                  <td>Mm</td>
                  <td>180</td>
                </tr>
                <tr>
                  <td>Capacidad de corte regular</td>
                  <td>Mm</td>
                  <td>180 x 280</td>
                </tr>
                <tr>
                  <td>Medida de la sierra</td>
                  <td>m/min</td>
                  <td>19 x 0.9 x 2,360</td>
                </tr>
                <tr>
                  <td>Motor</td>
                  <td>Hp</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>Peso</td>
                  <td>kg</td>
                  <td>210</td>
                </tr>
              </tbody>
            </table>
          </figcaption>
        </div>

        <div class="col-md-6">
          <h3>Pantógrafo</h3>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/pantografo.JPG" alt="" class="imgServicio" style="width:100%; height:auto;">
          <figcaption>
            <table>
              <tbody>
                <tr>
                  <td>TIPO:</td>
                  <td>SISTEMAS DE PLASMA</td>
                </tr>
                <tr>
                  <td>LINEA DE PRODUCTOS:</td>
                  <td>HyPerformance</td>
                </tr>
                <tr>
                  <td>TIPO DE MATERIAL:</td>
                  <td>Acero inoxidable, aluminio, acero templado.</td>
                </tr>
                <tr>
                  <td>APLICACIONES:</td>
                  <td>Corte de agujeros, recorte fino, corte biselado.</td>
                </tr>
              </tbody>
            </table>
            <p>El sistema de plasma HyPerformance HPR260XD ha sido diseñado y construido para obtener el máximo rendimiento y productividad en operaciones de corte x-y, biselado y robótico. El versátil sistema de 260 amperios combina velocidades de corte rápidas, ciclos de proceso rápidos, cambios rápidos y alta confiabilidad, y le brinda una calidad de corte HyPerformance incomparable desde espesores muy delgados hasta espesores más pesados.</p>
          </figcaption>
        </div>
        <div class="col-md-6">

        </div>
      </div>
    </div>


    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Maquinado CNC</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3>MAZAK VTC-20C</h3>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/maquinado2.jpg" alt="" class="imgServicio" style="width:100%; height:auto;">
          <figcaption>
            <ul>
              <li>Modelo: VTC-20C</li>
              <li>Marca: MAZAK</li>
              <li>Tipo: Centros de Maquinado Verticales</li>
              <li>Control: CNC (MAZATROL M-PLUS)</li>
            </ul>
            <table>
              <thead>
                <th colspan="2">ESPECIFICACIONES</th>
              </thead>
              <tbody>
                <tr>
                  <td>X: 1,651 mm</td>
                  <td>Conicidad: CAT-40</td>
                </tr>
                <tr>
                  <td>Y: 510 mm</td>
                  <td>Mesa-A: 508 mm</td>
                </tr>
                <tr>
                  <td>Z: 510 mm</td>
                  <td>Mesa-L: 2,007 mm</td>
                </tr>
                <tr>
                  <td>Potencia: 14.9 kW</td>
                  <td>Control: CNC (MAZATROL M-PLUS)</td>
                </tr>
                <tr>
                  <td>RPM: 10000 rpm</td>
                  <td>Dimensiones: 170” X 117” X 106”</td>
                </tr>
                <tr>
                  <td># ATC: 48</td>
                  <td>Peso: 13200 (LBS)</td>
                </tr>
              </tbody>
            </table>
          </figcaption>
        </div>
        <div class="col-md-6">
          <h3>CNC MCV - 610</h3>
          <figure>
            <img src="<?php bloginfo(stylesheet_directory)?>/img/maquinado1.jpg" alt="" class="imgServicio" style="width:100%; height:auto;">
            <figcaption>
              <p>Las máquinas de la serie MCV ofrecen el máximo valor como; excelente centro de maquinado de propósito general, ya que cuentan con un husillo de 8,000-RPM y torneado CAT 40. La MCV tienen un excelente desempeño en una amplia variedad de aplicaciones, incluyendo sin limitación: dispositivos, bases de moldes y operaciones secundarias. Esta máquina también puede incluir una caja de engranes ZF, lo que le da la habilidad de lograr cuatro veces el torque de un motor estándar.</p>
              <table>
                <thead>
                  <th colspan="2">ESPECIFICACIONES</th>
                </thead>
                <tbody>
                  <tr>
                    <td>Fecha de fabricación</td>
                    <td>1989</td>
                  </tr>
                  <tr>
                    <td>Tamaño de la tabla</td>
                    <td>37.4" x 18"</td>
                  </tr>
                  <tr>
                    <td>Máxima carga de la mesa</td>
                    <td>1,100 LBS</td>
                  </tr>
                  <tr>
                    <td>Núcleo de husillo a la mesa</td>
                    <td>5.9" - 26"</td>
                  </tr>
                  <tr>
                    <td>Eje X</td>
                    <td>24"</td>
                  </tr>
                  <tr>
                    <td>Eje y</td>
                    <td>18"</td>
                  </tr>
                  <tr>
                    <td>Eje Z</td>
                    <td>20"</td>
                  </tr>
                  <tr>
                    <td>Velocidad rápida, todos los ejes</td>
                    <td>472 IPM</td>
                  </tr>
                  <tr>
                    <td>Ejes</td>
                    <td>0.1 - 157 IPM</td>
                  </tr>
                  <tr>
                    <td>Velocidad del husillo (2 Velocidades engranadas)</td>
                    <td>60- 6,000 RPM</td>
                  </tr>
                  <tr>
                    <td>Tapa de husillo</td>
                    <td>#40</td>
                  </tr>
                  <tr>
                    <td>Motor de husillo</td>
                    <td>10 HP</td>
                  </tr>
                  <tr>
                    <td>Capacidad de cambio de herramientas </td>
                    <td>16 Estaciones</td>
                  </tr>
                  <tr>
                    <td>Máximo peso de la herramienta</td>
                    <td>8.8 LBS</td>
                  </tr>
                  <tr>
                    <td>Aprox. Dimensiones</td>
                    <td>100" X 103" X 114"H</td>
                  </tr>
                  <tr>
                    <td>Aprox. Peso</td>
                    <td>9,000 LBS</td>
                  </tr>
                </tbody>
              </table>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>


    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Maquinado</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Fresadora Vertical</h3>

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/fresa2.JPG" alt="" class="imgServicio" style="width:100%; height:auto;">
          <figcaption>1700x500x400 Hidraulica de alta produccion (copiadora)</figcaption></figure>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Fresadora Induma</h3>
          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/fresa1.JPG" alt="" class="imgServicio" style="width:100%; height:auto;">
          <figcaption>
            <p>Máquina para fresar; está compuesta de un cabezal, dotado de un movimiento de rotación, con una fresa (herramienta cortante), y de una mesa, también dotada de un mecanismo de movimiento, donde se fija la pieza.</p>
            <table>
              <thead>
                <th colspan="2">ESPECIFICACIONES</th>
              </thead>
              <tbody>
                <tr>
                  <td>Longitud de la mesa de trabajo</td>
                  <td>1500mm</td>
                </tr>
                <tr>
                  <td>Ancho de la mesa de trabajo</td>
                  <td>300mm</td>
                </tr>
                <tr>
                  <td>Potencia del mando del husillo</td>
                  <td>6kW</td>
                </tr>
                <tr>
                  <td>Número de velocidades de giro del husillo vertical</td>
                  <td>12 pzs</td>
                </tr>
                <tr>
                  <td>Velocidad de giro mínima del husillo vertical</td>
                  <td>30 1/min</td>
                </tr>
                <tr>
                  <td>Velocidad de giro máxima de husillo vertical</td>
                  <td>1500 1/min</td>
                </tr>
                <tr>
                  <td>Longitud de recorrido en el eje X (Avance mecánico)</td>
                  <td>1050mm</td>
                </tr>
                <tr>
                  <td>Longitud de recorrido en el eje Y (Avance mecánico)</td>
                  <td>325mm</td>
                </tr>
                <tr>
                  <td>Longitud de recorrido en el eje Z (Avance mecánico)</td>
                  <td>500mm</td>
                </tr>
                <tr>
                  <td>Velocidad de avance máxima en el eje X</td>
                  <td>41.7 mm/s</td>
                </tr>
                <tr>
                  <td>Velocidad de avance máxima en el eje Y</td>
                  <td>41.7 mm/s</td>
                </tr>
                <tr>
                  <td>Velocidad de avance máxima en el eje Z</td>
                  <td>41.7 mm/s</td>
                </tr>
                <tr>
                  <td>Peso de la máquina</td>
                  <td>2.9 t</td>
                </tr>
              </tbody>
            </table>
          </figcaption></figure>
        </div>
      </div>
    </div>
    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Soldadura</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Soldadora arco sumergido</h3>
          <figure>
            <img src="<?php bloginfo(stylesheet_directory)?>/img/soldadora.jpg" alt="" class="imgServicio" style="width:100%; height:auto;">
            <figcaption>
              <p>Soldadora arco sumergido</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Maquinas Soldadoras</h3>

          <figure>
            <img src="<?php bloginfo(stylesheet_directory)?>/img/maquinaSoldadora.jpg" alt="" class="imgServicio" style="width:100%; height:auto;">
            <figcaption>
              <p>LINCOLN 400 amp. MULTIPRPOCESOS. MIG, MAG, TUBULAR, TIG.</p>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Areas de trabajo</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Aréa de inspección</h3>

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/area1.jpg" alt="" class="imgServicio" style="width:100%; height:auto;">
          <figcaption>Area de inspeccion con mesa de marmol e instrumentos de medicion</figcaption></figure>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Aréa de pintura</h3>

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/pintura2.JPG" alt="" class="imgServicio" style="width:100%; height:auto;">
         </figure>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
