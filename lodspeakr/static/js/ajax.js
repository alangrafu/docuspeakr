function blankSuperClasses(curie){
  var url = docuspeakrHome+"blankData/"+curie;
  $.ajax({
    url: url,
    dataType: "json",    
    success: function(data){
      $.each(data.nodes, function(i, item){
          var table = "<table><thead><td>Restriction</td><td>Value</td></thead>";
          $.each(item, function(i2, item2){
            table += "<tr><td>"+item2.predicate+"</td><td>"+item2.object+"</td><tr>";
          });
          table+="</table>";
          $("div[data-id='"+curie+"']").append(table);
      });
    }
  })
}

$(".blankdescription").on("click", function(e){
  curie = $(e.target).closest("div.entity").attr("id");
  blankSuperClasses(curie);
})
