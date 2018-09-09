class PostsController < ApplicationController
  def index
    @posts = Post.all.order(updated_at: "desc")
  end

  def new
    @post = Post.new
  end
  
  def create
      if Post.create(body_params)
          flash[:notice] = "作成しました。"
          redirect_to posts_path
      else
          render new_post_path
      end
  end
  
  def show
  end
  
  def edit
    @post = Post.find(params[:id])
    
  end
  
  def update
    if Post.update(body_params)
      flash[:notice] = "#{params[:id]}番目を更新しました。"
      redirect_to posts_path
    else
      render edit_post_path(params[:id])
    end
    
  end
  
  def destroy
    @post = Post.find(params[:id])
    if @post.destroy
      flash[:notice] = "削除しました。"
      redirect_to posts_path
    end
  end
  
  private
  def body_params
      params.require(:post).permit(:body)
  end
end
