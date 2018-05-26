@extends('layout.home')

@section('content')

<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>ELECTROAUTO OSCARTITA C.A.</h1>
								<p>el mejor equipo, para el mantenimiento y cuidado de su automovil.</br> "su vehiculo no se lo pide, nos necesita"</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#servicios">Servicios</a></li>
								<li><a href="#Tips">Tips</a></li>
								<li><a href="#contacto">Contacto</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Electroauto Oscartita C.A.</h2>
								<span class="image main"><img src="images/pic01.png" alt="" /></span>
								<p>
									Con más de cinco (5) años de experiencia, ofreciendo nuestros 	servicios a una
 									alta gamma de clientes, satisfechos de las técnicas aplicadas y resultados de nuestro trabajo. Hemos y seguimos aprendiendo a escucharlo a usted. Entender los problemas observados y analizados por el usuario, nos ayuda a tener la eficiencia deseada, a la hora de resolver el daño que presenta su vehículo.
								</p>
								<p>
									Lo importante para nosotros es el rendimiento de su automóvil y tu seguridad. Contamos con la variedad de proveedores, importante, para obtener el repuesto que mejor se adapte a sus necesidades. Participándole las ventajas y desventajas, según sea la toma de decisiones. Ofreciendo de esta forma una lista de <a href="#servicios">servicios</a>, amplia y elemental para el cuidado y sustentación de sus vehículos.  
								</p>
							</article>

						<!-- Work -->
							<article id="servicios">
								<h2 class="major">Servicios</h2>
								<span class="image main"><img src="images/pic02.jpg" alt="" /></span>
								<p>
									Electroauto Oscartita C.A. Se destaca por ofrecerle una gran variedad de servicios, el trabajo en equipo, la capacitación del personal, las herramientas y nuestra experiencia, le brindarán a usted como cliente, la tranquilidad y confianza que andaba buscando. Entendemos lo importante de conducir un vehículo en óptimas condiciones, minimizando los riesgos que esto conlleva. Su seguridad es nuestra responsabilidad.
								</p>
								<p>
									Escáner automotriz; un diagnóstico completo de su vehículo, detectando los códigos de error y fallas del auto en tal caso de que existan.
								</p>
								<p>
									Alternadores; juega un rol muy importante en el trabajo eficiente de su vehículo, además de cumplir con la función de mantener la batería completamente cargada, quien se encarga de dar la electricidad necesaria al auto. 
								</p>
								<p>
									Inyectores; realizar un mantenimiento general de sus inyectores, limpieza, cambio de filtros, gomas (oring) y la aplicación de pruebas que determinen el comportamiento de ellos al momento de cumplir sus funciones, son importantes para el rendimiento de su vehículo.
								</p>
								<p>
									Mecánica ligera o básica; Es de gran importancia el mantenimiento preventivo de su vehículo, corrección y detección de fallas básicas del motor, sistema eléctrico, inyección, sistema de combustible, frenos, tren delantero y suspensión. Le ofrecemos cambios de neumáticos, amortiguadores, pastillas y mordazas de freno, cambio de aceite, filtros, bujías, cables, tapa y platinos del distribuidor, cambios de faros y lámparas, correas del alternador, entre otros. 
								</p>
								<p>
									Nuestro objetivo es brindarle un servicio profesional y de calidad, que permita solucionar problemas, junto a la capacidad de reaccionar proactivamente ante cualquier eventualidad y comportamiento de su automóvil. <a href="#contacto">Contáctanos</a>, danos a conocer tus necesidades, del resto nos encargamos nosotros.                                	
								</p>
																 
							</article>


						<!-- About -->
							<article id="Tips">
								<h2 class="major">Tips</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>
									<b>Revisión del aceite:</b> Se recomienda cambiarlo cada cinco mil, ocho mil y diez mil kilómetros dependiendo de diferentes factores como el modelo y el uso. Además, se recomienda revisar de manera regular los niveles de aceite, ya que la falta del mismo puede ocasionar fricción entre metales y ocasionar un daño en el motor.
								</p>
								<p>
									<b>Revisión de llantas:</b> Mantener la presión de aire adecuada al momento de calibrar las llantas es clave, la misma depende del tipo de auto, llantas y rines que se tenga. También es fundamental revisarlas para verificar que no estén desgastadas, con agujeros o posean otras irregularidades. Es aconsejable hacerlas inspeccionar por un especialista por lo menos una vez al año.
								</p>
								<p>
									<b>Alineación y Balanceo:</b> Son de vital importancia, el balanceo es necesario para evitar las vibraciones en el volante cuando se conduce rápido y la alineación es indispensable para que haya una dirección precisa y un desgaste parejo de la banda de rodamiento. Se recomienda hacerlo cada diez mil kilómetros.
								</p>
								<p>
									<b>Revisión de frenos:</b> El estado de los discos, las pastillas y el pedal se debe verificar y hacer revisar por un mecánico por lo menos una vez al mes para evitar accidentes. Además, realizar una inspección periódica del líquido de frenos permitirá un buen rendimiento al andar y mayor seguridad al conducir.
								</p>
								<p>
									<b>Una vez que haya finalizado la garantía de tu carro</b> y ya no puedas seguir haciendo uso de tu concesionario, es indispensable conseguir un taller mecánico de confianza, Electroauto Oscartita C.A. Te invita a formar parte de esta gran familia, ofreciéndote garantías, seguridad y excelentes precios.
								</p>
							</article>

						<!-- Contact -->
							<article id="contacto">
								<h2 class="major">Contacto</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions vertical">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="field half first">
											<label for="demo-name">Name</label>
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
										</div>
										<div class="field half">
											<label for="demo-email">Email</label>
											<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
										</div>
										<div class="field">
											<label for="demo-category">Category</label>
											<div class="select-wrapper">
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
										</div>
										<div class="field half first">
											<input type="radio" id="demo-priority-low" name="demo-priority" checked>
											<label for="demo-priority-low">Low</label>
										</div>
										<div class="field half">
											<input type="radio" id="demo-priority-high" name="demo-priority">
											<label for="demo-priority-high">High</label>
										</div>
										<div class="field half first">
											<input type="checkbox" id="demo-copy" name="demo-copy">
											<label for="demo-copy">Email me a copy</label>
										</div>
										<div class="field half">
											<input type="checkbox" id="demo-human" name="demo-human" checked>
											<label for="demo-human">Not a robot</label>
										</div>
										<div class="field">
											<label for="demo-message">Message</label>
											<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

@endsection