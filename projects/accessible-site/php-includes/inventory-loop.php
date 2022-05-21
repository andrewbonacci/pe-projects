

<!-- LOOP THROUGH EACH ITEM IN THE INVENTORY ARRAY -->
					<?php foreach ($inventory as $item) { ?>



						<li class="product">
							<product-card>
								<h2><?=$item["name"]?></h2>
								<figure>
									<picture>
										<img src="<?=$item["image"]?>" alt="<?=$item["alt"]?>">
									</picture>
									<figcaption>
									<p><?=$item["description"]?></p>
									</figcaption>
								</figure>
							</product-card>
						</li>



					<?php } ?>