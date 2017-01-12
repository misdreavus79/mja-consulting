@extends('layouts.twocolumn')

@section('content')
    <h1>Heading 1</h1>
    <p>Vestibulum dictum, eros at consectetur tristique, purus odio eleifend metus, vel accumsan augue dolor eu lacus. Morbi augue urna, consequat quis gravida eu, luctus sit amet ligula. Duis in pulvinar quam. Ut egestas nulla a velit ornare porttitor. Nam in dignissim nunc, eu molestie risus. Morbi fermentum eget libero nec aliquam. Curabitur ligula eros, mollis eget massa vel, suscipit sollicitudin lectus.</p>

    <h2>Heading 2</h2>
    <p>Fusce in felis ante. Aliquam hendrerit magna purus, ultricies lacinia turpis tristique hendrerit. Sed mollis massa eu arcu ultrices faucibus non eget lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget pharetra nisl, sit amet malesuada ante. Donec pretium nunc arcu, id varius nibh facilisis fringilla. Suspendisse vel justo lorem. Phasellus laoreet consectetur massa, quis rhoncus justo laoreet at. Aenean eros nibh, efficitur non diam ac, volutpat viverra ex.</p>

    <h3>Heading 3</h3>
    <ul>
        Unordered List
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Quisque vitae dolor a est porttitor posuere.</li>
        <li>Phasellus dapibus lacus a facilisis dignissim.</li>
        <li>Vestibulum in sem eu leo faucibus consequat a sit amet magna.</li>
        <li>Vivamus sed erat eget quam mollis scelerisque.</li>
        <li>Ut ut erat in justo consectetur auctor sed eu elit.</li>
        <li>Nulla at arcu auctor, feugiat elit at, facilisis neque.</li>
        <li>Duis accumsan ante ac molestie mattis.</li>
        <li>Proin nec nisl sodales, malesuada nibh non, suscipit augue.</li>
    </ul>

    <h4>Heading 4</h4>
    <ol>
        Ordered List
        <li>Sed sodales magna eu magna facilisis tincidunt.</li>
        <li>Morbi quis lacus et diam laoreet commodo.</li>
        <li>Nulla vel mi consequat, lobortis tellus quis, interdum leo.</li>
        <li>Ut feugiat quam quis egestas vulputate.</li>
        <li>Pellentesque vitae dolor sit amet magna accumsan volutpat.</li>
        <li>Nunc porttitor sapien vitae suscipit consectetur.</li>
        <li>Aliquam eu massa imperdiet, malesuada purus et, aliquet nibh.</li>
        <li>Curabitur consequat nisl et lectus posuere, placerat vestibulum eros molestie.</li>
        <li>Proin ullamcorper velit a purus egestas, nec blandit ligula mattis.</li>
    </ol>

    <h5>Heading 5</h5>
    <p><a href="">Link 1</a></p>
    <p><a href="">Link 2</a></p>
    <p><a href="">Link 3</a></p>
    <p><strong>Bolded Text</strong></p>
    <p><em>Italics</em></p>

    <h6>Heading 6</h6>
    <small>Small Element</small>
    <blockquote>Blockquote: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque lacinia justo, commodo sagittis dui convallis vitae. Duis id luctus lacus. Ut non maximus lectus, non feugiat justo. Nunc quam nibh, dignissim quis sapien et, malesuada bibendum ligula. Integer sed rhoncus diam, ac suscipit sapien. Cras nec feugiat libero. Donec ut tristique tortor. Morbi nisl nulla, ullamcorper semper lacus aliquam, fermentum interdum purus. Aenean ultricies sem eget erat tincidunt auctor. Nam non condimentum tortor. Suspendisse sed dapibus eros.</blockquote>
    <cite>-Citation</cite>
@endsection

@section('aside')
    @parent
    <div>Test 2</div>
@endsection