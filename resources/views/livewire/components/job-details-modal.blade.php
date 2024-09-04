<div 
    x-data="{ show: false, job: '{{ $job }}' }" 
    x-show="show" 
    x-on:open-modal.window="show = true" 
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false" 
    class="fixed inset-0 z-50">
    
    <div x-on:click="show = false" class="fixed inset-0 opacity-75 bg-slate-950"></div>
    <div class="fixed inset-0 grid max-w-4xl grid-cols-3 gap-1 m-auto bg-white rounded max-h-fit">
        <div class="grid grid-rows-2 gap-4 p-4">
            @php($placeholder = $images[0]->image)
            <div class="bg-slate-800 rounded-t-md">
                <img class="max-w-64 object-cover aspect-square rounded opacity-60 blur-[1px]" src="{{ asset('storage/projects/images/' . $placeholder) }}" alt="{{ $job->name }}">
            </div>
            <div class="text-sm text-gray-700">
                <h1 class="m-0 text-xl font-bold text-black">{{ $job->name }}</h1>
                <p class="whitespace-break-spaces">Client:            {{ $client->getFullname() }}</p>
                <p class="whitespace-break-spaces">Budget:         {{ $job->budget }}</p>
                <p class="whitespace-break-spaces">Deadline:      {{ $job->deadline }}</p>
            </div>
        </div>
        <div class="grid col-span-2 grid-rows-2 p-4">
            <div class="p-2 overflow-y-scroll border border-black rounded max-h-52">
                <p class="m-0 text-sm font-semibold text-gray-500">Description</p>
                <p class="text-sm">{{ $job->description }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia voluptates adipisci expedita aliquid eligendi. Ipsum repellat voluptatum distinctio doloribus, omnis error et? Ex ratione est natus perspiciatis ad fugit quasi!
                Impedit praesentium dignissimos dicta tenetur aut est ipsam facere placeat optio accusantium non consectetur cum quia aspernatur exercitationem delectus, unde et earum fuga eveniet facilis consequatur. Neque aliquam adipisci eos?
                Autem velit possimus impedit! Enim, sed! Nemo facere dolorem officia illo quis, ut, id voluptates optio tempore voluptatibus iusto omnis sit numquam eum quaerat dignissimos incidunt dolor molestiae maiores natus?
                Ipsam incidunt unde voluptatum modi vero, quam laborum voluptatem, iste veritatis tempora qui est voluptas ut facere eveniet, quas laboriosam nostrum deserunt beatae dolorum expedita libero. Nesciunt neque omnis debitis.
                Placeat nulla itaque reprehenderit voluptates ut repellat aperiam nostrum aspernatur veniam provident cumque, quod atque porro aliquam, quam vero dolores veritatis esse at? Error tempore vel dignissimos sed obcaecati facere!
                Maiores quis, perspiciatis cupiditate quaerat veritatis voluptatibus inventore nobis fugit ratione aspernatur excepturi natus voluptatem hic corporis officia. Minima tenetur similique quibusdam vitae vel voluptate autem quae laboriosam tempore iste.
                Eligendi maxime quod, assumenda sapiente dolorem ut ullam quia repudiandae eum voluptas, dolor esse beatae distinctio voluptatem culpa dicta sed ratione qui est sit quam commodi, itaque ducimus accusamus. Esse?
                Temporibus voluptatibus voluptas magni ullam recusandae. Dolore accusantium doloribus delectus distinctio necessitatibus eos laboriosam. Magni suscipit voluptate dolore nobis corrupti fugit, a, voluptatum delectus enim quia id voluptatibus impedit! Suscipit?
                Maiores tenetur quia impedit voluptate tempore accusamus, ad totam eum, pariatur fuga corrupti. Quos repellendus tempora dignissimos blanditiis nulla, architecto esse fugiat eum molestias iusto, sint laudantium hic, vero nemo!
                Vero debitis, quae, odit perspiciatis officiis, eius error vel accusamus molestias animi dicta qui. Illo beatae dolorum aliquid accusamus, repellat distinctio enim fugiat, doloremque facilis exercitationem eum! Consequatur, voluptatibus necessitatibus.
                Nobis autem eveniet perspiciatis architecto alias vel deleniti impedit, aut sit fuga consequuntur. Odio eos beatae obcaecati accusantium dignissimos, velit iure vitae maiores numquam. Voluptatum error ab nisi excepturi aspernatur.
                Provident inventore harum laboriosam cupiditate maxime rem sequi deleniti, fugiat hic, delectus, sed totam obcaecati alias iste perspiciatis expedita. Deserunt delectus praesentium vel at deleniti quae eaque aperiam illo nam!
                Temporibus accusantium enim ducimus eius adipisci nihil repellat repellendus? Distinctio autem aut sed ea neque suscipit error iste! Officiis placeat eveniet culpa facilis quod tempore dolore et velit suscipit in.
                Rem totam dolores, laborum laudantium minima tenetur quo hic nobis eos voluptatibus eum incidunt praesentium nulla quaerat officia nisi doloremque aut repellat, obcaecati accusamus atque veritatis. Necessitatibus quod hic dolore.
                Quisquam quidem, culpa recusandae magnam ut alias asperiores obcaecati sapiente voluptate eos tempore ipsam quas dolor ea quasi dicta distinctio dolore. Laboriosam corporis accusantium, consequuntur consequatur libero repellendus cum nesciunt.
                Nemo repudiandae sed quo, unde, dolor facilis amet totam illum facere ipsam quos? Est officiis aliquam tenetur incidunt possimus eligendi praesentium consectetur. Laboriosam placeat praesentium illum distinctio delectus assumenda corrupti.
                Aut possimus aliquid deleniti, qui ipsa quas doloremque? Minus animi iusto eaque est illo, quibusdam voluptas consequatur adipisci, aut amet illum atque nostrum quis dolore nobis voluptatum repellat veritatis ad.
                Quae similique dolor vel, facere commodi temporibus eaque sequi, sapiente, corrupti earum veniam? Velit doloremque itaque numquam minus excepturi, maxime reiciendis corporis, cupiditate architecto ipsam illo optio ab fuga sequi?
                Rem odit vitae magni fuga expedita voluptas atque, architecto nemo et sint fugit eos ullam ipsum aliquid ducimus. Id quod suscipit laudantium repellat saepe dolor perspiciatis ipsa non esse illum!
                Labore, iure assumenda. Repudiandae ab fuga tempore optio minus, obcaecati provident deleniti nam cupiditate distinctio impedit dolor, libero autem. Error accusamus cupiditate odio praesentium earum nam totam impedit quae distinctio?
                Officiis odio voluptatem consectetur, a maxime libero excepturi recusandae accusantium dolore fugiat doloremque rem illum expedita quia obcaecati, numquam voluptatum autem. Repudiandae assumenda ut deserunt qui facilis, dignissimos cupiditate? Libero!
                Et suscipit inventore aliquid qui ratione aperiam voluptas dolor. Porro itaque ea ex quo est ratione dolor, maiores, saepe, corrupti quisquam beatae voluptates! Magnam vero nisi asperiores nulla atque. Mollitia!
                Natus asperiores corporis tenetur provident animi maxime, ab, sapiente voluptates magni minus libero. Ducimus totam quod dolorum magnam animi dicta! Magni cumque, doloribus praesentium blanditiis possimus adipisci eius quos voluptatibus?
                Neque iure sed ad rem distinctio libero illo doloremque molestiae, quaerat possimus repellendus corporis pariatur, aliquid hic numquam eligendi? Natus nesciunt ullam provident obcaecati perferendis. Tempore, ea autem! Laudantium, ut.
                Quis necessitatibus corporis nobis vero consequuntur. Nobis doloremque porro maiores beatae architecto sunt explicabo omnis repellendus, tempore qui? Eum veritatis omnis rem eveniet tenetur esse porro suscipit accusamus! Quam, rerum?
                Fugiat aperiam tempore sed? Voluptatibus itaque tempora odit possimus corrupti molestias reiciendis voluptatum obcaecati soluta? Perspiciatis ratione, necessitatibus eligendi ipsum itaque provident soluta perferendis culpa fugiat aliquid tenetur, qui sequi?
                Recusandae temporibus nam fuga corporis, dolore, excepturi sit ut unde enim possimus magnam, asperiores maiores. Nesciunt iusto sit eligendi blanditiis at accusamus, consequatur quas, id nemo fuga exercitationem eaque sint.
                Eaque quos laudantium alias sed odit ipsa saepe distinctio ea suscipit deleniti! Neque unde aut eos ipsa expedita delectus voluptatum. Ut eum sunt fugiat commodi. Temporibus fuga libero eos sequi.
                Placeat, explicabo! Modi amet voluptas veniam! Omnis optio beatae eius numquam animi dolorem dolores laudantium inventore a dolorum, facere velit modi distinctio cumque non ratione quisquam hic, recusandae nobis necessitatibus.
                Alias nihil repellendus, cupiditate placeat ratione natus delectus eveniet, facere vel esse accusantium tempore numquam mollitia quo illo neque reprehenderit aspernatur assumenda consectetur quam similique est dolore quis. Esse, beatae!
                Illum consequatur iste molestiae ducimus dolorum dolore veritatis dolorem repellendus unde aspernatur et ratione magni ad quia enim, optio maxime. Odit officia, laborum quaerat incidunt molestiae laboriosam voluptates reiciendis maiores.
                Autem deserunt deleniti assumenda, numquam fuga veniam? Cumque soluta dignissimos optio quidem adipisci explicabo itaque labore fugiat saepe quae similique, cum inventore unde odit facilis iste nulla at eius a.
                Magni delectus numquam fugit aperiam ab! Sit ipsa eligendi laboriosam, temporibus culpa accusamus exercitationem sint quis pariatur facere officia? Accusantium, vero porro? Eveniet voluptatem assumenda quia eius commodi tempora consequatur!
                Ducimus, molestiae dolores ea officiis totam magnam illum ex voluptatem, excepturi repellendus enim architecto. Unde, a officia. Vitae quo optio sapiente! Error optio eaque atque, placeat ratione molestiae quos consequatur!
                Beatae perspiciatis aut reprehenderit laudantium architecto ipsa obcaecati excepturi esse, eius impedit provident ipsum eligendi animi exercitationem incidunt ad distinctio maiores repellendus numquam fugiat atque unde debitis maxime? Distinctio, totam!
                Quam, ducimus minus voluptas ipsam eligendi dolor quas in sit sunt perspiciatis tenetur velit beatae rerum voluptatibus cumque nobis nesciunt molestiae esse a repellat animi, earum nostrum ipsum error! Itaque.
                Sunt ipsam quod facilis, commodi libero nemo corporis non fuga maxime similique praesentium eveniet delectus expedita doloremque omnis atque suscipit illo reiciendis quae tempore! Odio eaque eos quas et minus!
                Magnam facilis saepe ad repudiandae beatae exercitationem unde explicabo architecto officiis pariatur non temporibus necessitatibus nesciunt praesentium, cum ullam dicta, obcaecati esse porro sapiente delectus, dolorem accusantium. Rerum, deleniti beatae?
                Deleniti temporibus neque, quae necessitatibus ratione optio cumque nam, repudiandae velit odit omnis quidem error. Sunt eos voluptates perferendis vitae molestias illo possimus illum cum consectetur, minus eligendi reprehenderit temporibus.
                Vero, aut quibusdam molestiae autem accusamus rerum officiis, voluptatibus magnam magni dolorem facilis explicabo qui. Voluptatem, consequuntur maiores, animi perspiciatis dolor, itaque neque harum autem consectetur fugiat explicabo eligendi distinctio!
                Omnis nisi assumenda, tenetur, quo maiores nobis inventore qui aliquid voluptate ullam, perferendis nostrum? A provident veritatis officiis aut, distinctio, blanditiis quas corrupti inventore iste sequi animi tenetur iusto repudiandae.
                Repellendus assumenda neque illo perferendis saepe tempore tenetur omnis tempora dolores eligendi molestiae accusamus, nam impedit et sed voluptas minus cum expedita natus ullam. Aut quis voluptatum aperiam exercitationem? Voluptates?
                Dolore quod aperiam, natus quis saepe autem? Officia cum dolores adipisci, mollitia rerum nulla id, sunt esse molestiae maxime eius architecto? Reprehenderit eveniet soluta et iure magni sequi placeat nisi?
                Velit excepturi debitis repellat vitae laudantium voluptates, ex sed error recusandae, totam vel? Possimus sit modi, unde omnis tempore quisquam aut aspernatur! Quae officia optio quia veritatis asperiores provident dignissimos?
                Ex totam, rerum facilis, dolore delectus ipsum asperiores soluta possimus accusantium expedita eligendi dolorem sapiente, autem iure! Eius eos culpa perspiciatis libero nesciunt sapiente placeat voluptatem, a, blanditiis, in eaque.
                Laudantium dolorem quibusdam impedit fugiat maiores quod aperiam, molestias fuga commodi vel dolorum beatae unde facere voluptatem odit error illum aliquid hic nesciunt deserunt accusamus. Veniam dolor accusantium odio placeat!
                Consequuntur numquam corporis molestias eaque veniam hic dicta minus earum harum cum accusamus labore perspiciatis odit quidem illo ipsum dignissimos, eius et, vitae beatae. Dolorum minus esse nemo quis aliquid.
                Unde reprehenderit officia consequuntur dolor impedit laboriosam voluptas iste eligendi consequatur repudiandae autem, quae id perspiciatis, beatae voluptatem doloribus earum voluptatum quia ab tenetur omnis similique! Aperiam hic delectus veritatis.
                Quos, odit. Rem, tempora? Dolores amet quis, inventore at aspernatur beatae eum illo quidem soluta corporis expedita tempora repudiandae dolor officiis possimus quo ut nihil quia quaerat! Vero, iste. Quas.
                Totam id quidem illum optio, natus ab perspiciatis hic, maiores doloremque vel reprehenderit dolore ipsum recusandae placeat perferendis quo ipsa veritatis consequatur, sint aliquid est quibusdam iure tenetur! Ipsum, ut!</p>
            </div>
            <div>
                <h3 class="font-bold">Interested in the project</h3>
                <div class="p-2 overflow-x-scroll border border-black rounded">
                    <table class="text-center table-fixed text-balance">
                        <thead class="text-sm">
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Current Projects</th>
                                <th>Portfolio</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td>Vince na Horni</td>
                                <td>August 30, 2024</td>
                                <td>5</td>
                                <td>porfolio.vinzishorny.com</td>
                            </tr>
                            <tr>
                                <td>Vince na Horni</td>
                                <td>August 30, 2024</td>
                                <td>5</td>
                                <td>porfolio.vinzishorny.com</td>
                            </tr>
                            <tr>
                                <td>Vince na Horni</td>
                                <td>August 30, 2024</td>
                                <td>5</td>
                                <td>porfolio.vinzishorny.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-end gap-3">
                <button x-on:click="show = false" type="button" class="px-5 py-4 text-gray-700 transition-transform bg-gray-300 border border-gray-700 rounded hover:scale-110">Close</button>
                <button type="button" class="px-3 py-4 text-white transition-transform bg-green-500 border border-black rounded hover:scale-110">Place Bid</button>
            </div>
        </div>
    </div>
</div>
