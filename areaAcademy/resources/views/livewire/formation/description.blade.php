<div class="col-xl-8 col-lg-7 order-box-1">
    <div class="service-details__content">
        <div class="img-box-outer">
            <div class="img-box1">
                <img src="{{asset($formation->picture)}}" alt="" />
            </div>
        </div>

        <div class="text-box1" id="content">
            <h2>{{$formation->name}}</h2>
        </div>

    </div>


<script>
    let content = @js($content) ; 
    console.log(content); 

    content.forEach(element => {
            switch(element.type){
                case "paragraph" : {
                    var paragraph = document.createElement("p");
                    // paragraph.classList.add("desc_para");
                    paragraph.innerHTML  = element.data.text;

                    const contentDiv = document.getElementById('content'); 
                    contentDiv.appendChild(paragraph);
                    break;
                };
                case "header" : {
                    if(element.data.level == "2"){
                        var heading = document.createElement("h2");
                        heading.classList.add("black-heading");
                        heading.innerHTML  = element.data.text;
                        const contentDiv = document.getElementById('content'); 
                        contentDiv.appendChild(heading);
                        break;
                    }else if(element.data.level == "3"){
                        var heading = document.createElement("h3");
                        heading.classList.add("black-heading");
                        heading.innerHTML  = element.data.text;
                        const contentDiv = document.getElementById('content'); 
                        contentDiv.appendChild(heading);
                        break;
                    }
                };
                case "list" : {
                    // Create a new ul element
                    var list = document.createElement("ul");

                    // Add the "x" class to the ul element
                    list.classList.add("desc_list");
                    // Loop through the items array
                    for (var i = 0; i < (element.data.items).length; i++) {
                        // Create a new li element
                        var listItem = document.createElement("li");
                        // listItem.classList.add("desc_list-item");
                        // Set the text content of the li element
                        listItem.innerHTML = element.data.items[i];

                        // Append the li element to the ul element
                        list.appendChild(listItem);
                    }
                    const contentDiv = document.getElementById('content'); 
                    contentDiv.appendChild(list);
                    break;
                }
                
            }
        });

</script>


</div>