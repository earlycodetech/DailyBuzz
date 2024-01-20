@extends('layouts.app')
@section('content')
    <h1>Homepage</h1>

    <ul>
        @foreach ($items as $product)
            <li>{{ $product }}</li>
        @endforeach


        <h4>FORELSE</h4>
        @forelse ($items as $product)
            <li>{{ $product }}</li>
        @empty
            <li>No Product Available</li>
        @endforelse
    </ul>

    <img src="{{ asset('images/video-bg.png') }}" alt="Image" width="100%">

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nemo libero accusamus, dicta explicabo hic
        dignissimos perspiciatis quibusdam a iusto quae aliquid! Sunt ab tenetur odio similique esse illum nihil officiis,
        libero in voluptate sint iure nemo, a nobis, laboriosam aperiam beatae quisquam labore consequatur. Illum fuga
        eveniet numquam veniam eum voluptas placeat temporibus magni ipsum error, enim debitis laboriosam sunt distinctio
        quo porro quisquam? Quae odio vero praesentium voluptates esse quibusdam. Non nisi ipsa tempora sint perspiciatis in
        dolores hic? Natus, temporibus ipsam sed odit repellat impedit doloremque, possimus nostrum inventore praesentium,
        dignissimos sapiente. Officia, dolore odio. Nemo, aspernatur? Soluta incidunt, id facere optio pariatur quas labore.
        Dolorum delectus a voluptatibus aperiam vitae fugiat voluptas sunt repellendus omnis soluta qui doloribus cum earum
        ipsa fugit beatae debitis tenetur, reprehenderit voluptatem. Reiciendis est repellendus debitis expedita, harum ipsa
        blanditiis? Rerum harum voluptates dolorem. Possimus illum ipsa officiis quibusdam nihil nesciunt sunt laudantium,
        amet dolore labore ab commodi neque architecto! Quisquam fugit nobis accusantium nisi architecto alias! Nemo
        excepturi sequi itaque neque mollitia magnam ipsum accusamus assumenda ab ea. Dolore impedit voluptates sequi id
        accusantium animi reiciendis ea quia ratione fugit illo modi optio nam ipsum debitis, laudantium deleniti tempora,
        tenetur tempore nisi, error incidunt sapiente! Reprehenderit unde ratione tenetur eius dolore ab enim id quasi
        debitis dolores a nam itaque, architecto illum veritatis tempore quas aperiam necessitatibus praesentium quam.
        Similique totam quo saepe omnis obcaecati doloribus sequi aut, quibusdam possimus! Est, dignissimos magni molestiae
        eligendi autem libero doloribus aut inventore minima quis sapiente eos delectus illo quaerat dolorem vitae fuga
        porro possimus. Accusamus officia in numquam atque blanditiis? Autem debitis voluptatibus incidunt tempora sit
        sapiente maiores nostrum beatae, placeat eveniet non cum voluptate eligendi facere aperiam pariatur! Optio, quos
        esse repudiandae voluptates quo a sunt minus amet omnis neque quisquam corrupti natus maxime ratione ut sed odit non
        laboriosam soluta quibusdam eius quasi incidunt consectetur! Repellat eos nesciunt voluptas et quibusdam, illo
        doloribus mollitia officiis ullam quidem praesentium, eum corrupti hic est minus odio? Consectetur, cumque in
        voluptatum optio quam explicabo nesciunt deserunt aspernatur mollitia fuga facere ducimus cum laboriosam totam nihil
        commodi aut vitae ipsa iste assumenda nobis. Minima nulla officia itaque nisi deserunt temporibus, atque blanditiis
        doloremque nostrum facilis excepturi eligendi quaerat tempore rem perferendis molestiae quisquam expedita, minus
        enim aliquam cupiditate! Repellat, voluptatibus cumque debitis eius reprehenderit necessitatibus quasi molestiae
        consectetur sit maiores fuga error officiis earum illum placeat ipsam magnam nesciunt. Similique accusamus, sit
        eaque aut quia odit deserunt repellat ullam mollitia rem officiis minus harum sint dolores iste ad. Sed consequatur
        omnis explicabo, accusamus quos beatae labore autem ex, doloremque, culpa itaque? Nihil quibusdam modi libero totam
        laboriosam repellat, nulla officiis dignissimos ducimus aliquam laborum eveniet nam minima dicta perferendis sed
        esse omnis minus eos aperiam accusamus magnam. Ratione nisi harum possimus eum voluptate eos, omnis dolorum at quam
        perferendis voluptatum quidem optio itaque corporis, aut quae quis repellendus amet asperiores laudantium
        reiciendis? Sequi praesentium eius ducimus, rerum, eveniet aspernatur, voluptatum atque minus quae quisquam
        similique! Provident repudiandae assumenda quisquam soluta ex, magnam tempora ad dolorem a deserunt nesciunt sit
        nostrum nulla unde? Dicta debitis porro facilis suscipit perspiciatis modi inventore voluptatum itaque numquam ea
        vitae, expedita voluptatibus doloribus! Inventore aliquid dicta explicabo fugit officia assumenda in sequi
        consequatur sit eos quibusdam, iure neque ullam ipsam. Sapiente in voluptate, consequuntur fugiat placeat reiciendis
        repellat velit quae necessitatibus unde illum, provident perspiciatis asperiores rerum eos nihil? Molestias ipsam
        consequatur sint vero laborum atque mollitia vel a. Hic provident sit necessitatibus assumenda dignissimos nesciunt
        repellendus maxime nostrum delectus corporis voluptates ipsam odio, eveniet eaque maiores et ipsa. Dolor nobis
        delectus enim mollitia repellat omnis nisi autem fugit veniam est? Quidem illum, quas repellat neque assumenda
        maiores tempora incidunt suscipit eveniet vero omnis quos, dolorum voluptate est distinctio a saepe necessitatibus
        laborum pariatur odio sapiente doloribus quod veritatis? Modi, error architecto pariatur quidem aperiam quisquam
        laboriosam aliquid molestiae aspernatur excepturi nostrum. Corporis porro, expedita deserunt, nam omnis incidunt
        reiciendis numquam distinctio totam eius maxime possimus iste excepturi repellat nobis perferendis tenetur quae
        dolores itaque? Delectus reiciendis sapiente nulla quidem, amet at quaerat doloremque ratione accusantium totam,
        placeat omnis est illo tempore soluta cumque quod ea accusamus, consectetur voluptatem optio cum distinctio
        veritatis. Repellat omnis quia vero nihil consequuntur similique sequi quibusdam exercitationem ratione veniam
        deserunt, in, ut sit veritatis, aliquid dolore impedit quo dolores optio libero perferendis est. Fugit omnis quas
        cumque sunt ab earum blanditiis molestiae ratione cupiditate! Voluptatem vel rem labore facilis, minima
        exercitationem qui sint laudantium consequatur repellat aliquam! Minima similique, consequatur, doloribus rem illum
        magnam quis velit nam temporibus, distinctio sed nesciunt. Voluptatibus ipsum provident cupiditate accusamus,
        molestias distinctio natus! Possimus, asperiores nam, reiciendis numquam beatae sapiente, adipisci laborum deleniti
        inventore doloremque aut iste at animi dolore nisi nostrum assumenda eligendi placeat modi consequuntur distinctio
        odio. Blanditiis nostrum aliquam dolorum sit consectetur hic nihil aliquid esse pariatur distinctio numquam,
        suscipit aut sed necessitatibus natus voluptatum temporibus recusandae et ipsa sint, culpa commodi. Necessitatibus
        corrupti natus laborum suscipit repudiandae earum! Ut cupiditate explicabo ratione delectus nisi velit magni,
        quisquam voluptate numquam quo nemo beatae aspernatur deserunt sapiente autem? Exercitationem earum odit atque
        commodi quasi enim in! Quis quas natus fugit optio ab assumenda, incidunt veritatis culpa praesentium enim
        voluptatum repellat aliquam dolorum exercitationem libero voluptatem, esse fugiat commodi! Repellat dolor officiis
        voluptatibus, ipsa quam id minus rem quidem nam vitae voluptatem corrupti optio! Provident ipsam velit magnam, saepe
        dolor placeat voluptate illo, nihil totam corporis aliquid! Deleniti libero minus a magni consequatur molestias
        ratione illum ullam perspiciatis incidunt doloremque laboriosam facilis architecto obcaecati doloribus quibusdam,
        iusto labore consectetur praesentium quia aliquam dolorem rem, facere voluptatem. At, labore adipisci accusantium
        inventore voluptatum voluptatibus perspiciatis laudantium. Quam impedit repellendus commodi, a consequuntur odit
        neque pariatur libero ratione iure facilis laborum ad quidem alias sequi blanditiis vitae aliquid magni dignissimos
        autem? Labore, dicta. Animi quis aut, nam assumenda eligendi nihil doloremque recusandae incidunt et. Quidem quia
        natus, optio maxime assumenda asperiores sequi ipsum delectus, fugit consequatur illum iure.
    </p>
@endsection
