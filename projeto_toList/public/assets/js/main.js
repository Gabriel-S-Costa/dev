function getModal(_url='', _data='', _method='', _type='html') {
   $.ajax({
      url: _url, 
      data: _data, 
      type: _method, 
      dataType: _type, 
      success: function(res) {         
         $("#modal-form").html(res);
         $("#form-register-modal").modal("show");
      }, 
      erro: function(res) {
         console.log("erro");
         console.log(res);
      }
   });
}

function capitalizeString([ first, ...rest ]) {
	return first.toUpperCase() + rest.join("");
}

function removeItem(arrayIndex) {
   // recebe o indice da posição e a quantidade de elementos a ser removido.
   List.splice(arrayIndex, 1);
   const wrapperList = document.getElementById('list-structure');
   wrapperList.innerHTML = "";
   
   let newlist = createList(List);
   $("#list-structure").html(newlist);
}

function createList(List=[]) {
   if(List===[]) {
      return false;
   }
   const ul = document.createElement("ul");
   ul.classList.add("task-list");

   List.forEach(element => {
      const indexItem = List.indexOf(element);
      const li = document.createElement("li");
      li.classList.add("task-list-item");
      li.innerHTML = element + `<button type='button' onclick='removeItem(${indexItem})' class='delete-item'><i class='far fa-trash-alt'></i></button>`;      
      ul.append(li);
   });
   return ul;
}

var List = [];

$(".btn-add-item").click(function(){
   let listItem = $('input[name=txt_item]').val();
   List.push(capitalizeString(listItem));   

   let listStructure = createList(List);
   $("#list-structure").html(listStructure);

   $('input[name=txt_item]').val("").focus();   
});

$("#btn-save-list").click(function(event){
   event.preventDefault();
   let _listTitle = $("input[name=txt_title]").val();
   let _listItem = List;
   let _tags = document.getElementsByName('tag_option');
   let _tagsArray = {};

   _tags.forEach(tag => {
      _tagsArray[tag.id] = tag.value === 'on' ? 1 : 0;
   });
   //console.log(_tagsObj);

   let _data = { title: _listTitle, itens: _listItem, tags: _tagsArray };
   
   console.log(_data);
   
   $.ajax({
      url: '/new-list', 
      data: _data, 
      type: 'POST', 
      dataType: 'text', 
      success: function(res) {         
         console.log(res);
      }, 
      erro: function(res) {
         console.log("erro");
         console.log(res);
      }
   });

});

$("label.tags").click(function(){
   let _check = $(this).prev('input').prop('checked');
   let _issetIcon = $(this).children('i').hasClass('fas fa-check');
   if(_check) {
      $(this).children('i').removeClass('fas fa-check');
      $(this).prev('input').val('');
   } else {
      $(this).children('i').addClass('fas fa-check');
      $(this).prev('input').val('on');
      $(this).prev('input').prop('checked');
   }
});